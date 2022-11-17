<?php
/**
 * User: Powerless
 * Date: 2021/6/20
 * Blog: https://wzxaini9.cn
 */

namespace App\Services;

use App\Models\UploadModel;
use Qcloud\Cos\Client;

class UploadService extends Service
{
    protected $uploadModel;

    public function __construct()
    {
        parent::__construct();
        $this->uploadModel = new UploadModel();
    }

    /**
     * @param $ext
     * 返回后缀所对应的文件类型
     * @return int
     */
    private function getType($ext)
    {
        $image = ['swf'];
        $compression = ['rar', 'zip', 'apk', 'cab', 'arj', 'lzh', 'tar', 'gz', 'ace', 'uue', 'bz2．jar', 'iso', 'z', '7z ', 'xz', 'rar5', 'exe', 'lz', 'mdf', 'zipx'];
        $office = ['doc', 'docx', 'docm', 'dotx', 'dotm', 'xls', 'xlsx', 'xlsm', 'xltx', 'xltm', 'xlsb', 'xlam', 'ppt', 'pptx', 'pptm', 'ppsx', 'ppsm', 'potx', 'potm', 'ppam', 'pdf', 'tmp', 'wps', 'wks', 'wcm', 'wdb'];
        $text = ['h', 'go', 'md', 'mod', 'json', 'jsonml', 'lock', 'php', 'py', 'sh', 'sql', 'xml', 'xsl', 'bak', 'ldf'];
        switch ($ext) {
            case in_array($ext, $image):
                $type = 1;
                break;
            case in_array($ext, $compression):
                $type = 2;
                break;
            case in_array($ext, $office):
                $type = 3;
                break;
            case in_array($ext, $text):
                $type = 4;
                break;
            default:
                $type = 0;
        }
        $fileTypes = ['application', 'image', 'compression', 'office', 'text'];
        return $fileTypes[$type];
    }

    /**
     * 上传文件
     * @param $request
     * @return mixed
     */
    public function update($request)
    {
        $file = $request->file('file');
        $ext = $file->getClientOriginalExtension();
        [$type] = explode('/', $file->getMimeType());
        if ($type == 'application') $type = $this->getType($ext);
        if (!strcmp(app('env'), 'prod')) {
            $path = $type . date('/Y/m/');
        } else {
            $path = app('env') . '/' . $type . date('/Y/m/');
        }
        $name = uniqid();
        if ($ext) {
            $name = $name . '.' . $ext;
        }
        $config = $this->configInfo('cos');
        $cos = new Client([
            'region'      => 'ap-beijing',
            'credentials' => [
                'secretId'  => $config['app_id'],
                'secretKey' => $config['secret'],
            ]
        ]);
        $cos->upload($config['target_bucket'], $path . $name, $file->getRealPath());
        $data['url'] = env('APP_CDN') . $path . $name;
        $insert = [
            'user_id' => $request->user()->id,
            'url'     => $path . $name,
            'type'    => $type,
            'name'    => $name
        ];
        $this->uploadModel->insertGetId($insert);
        return $data;
    }
}
