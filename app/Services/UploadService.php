<?php
/**
 * User: Powerless
 * Date: 2021/6/20
 * Blog: https://wzxaini9.cn
 */

namespace App\Services;

use App\Models\UploadModel;
use Qcloud\Cos\Client;
use QCloud\COSSTS\Sts;

class UploadService extends Service
{
    protected $uploadModel;
    private $config;
    private $domain = 'https://cdn.shanwo.cc/';

    public function __construct()
    {
        parent::__construct();
        $this->uploadModel = new UploadModel();
        $this->config = $this->configInfo('oss');
    }

    /**
     * @param $ext
     * 返回后缀所对应的文件类型
     * @return int
     */
    private function type($ext)
    {
        $fileTypes = ['file', 'picture', 'compression', 'office', 'music', 'video', 'code'];
        $picture = ['bmp', 'gif', 'ico', 'jpeg', 'jpg', 'png', 'psd', 'swf', 'tif'];
        $compression = ['7z', 'apk', 'bz2', 'exe', 'gz', 'iso', 'jar', 'lz', 'mdf', 'rar', 'tar', 'xz', 'zip', 'zipx'];
        $office = ['csv', 'doc', 'docx', 'log', 'pdf', 'ppt', 'pptx', 'tmp', 'txt', 'wps', 'xls', 'xlsx'];
        $music = ['ape', 'flac', 'midi', 'mp2', 'mp3', 'mpa', 'ra', 'wav', 'wma', 'wv'];
        $video = ['asf', 'avi', 'flv', 'mkv', 'mp4', 'ram', 'rm', 'rmvb', 'rp', 'rpm', 'wm', 'wmp', 'wmv'];
        $code = ['conf', 'cpp', 'css', 'go', 'h', 'html', 'js', 'json', 'lock', 'md', 'mod', 'php', 'py', 'sh', 'sql', 'xml'];
        switch ($ext) {
            case in_array($ext, $picture):
                $type = 1;
                break;
            case in_array($ext, $compression):
                $type = 2;
                break;
            case in_array($ext, $office):
                $type = 3;
                break;
            case in_array($ext, $music):
                $type = 4;
                break;
            case in_array($ext, $video):
                $type = 5;
                break;
            case in_array($ext, $code):
                $type = 6;
                break;
            default:
                $type = 0;
        }
        return $fileTypes[$type];
    }

    /**
     * 前端上传签名
     * @return array
     * @throws \Exception
     */
    public function secret($user)
    {
        $path = '/';
        if (strcmp(env('APP_ENV'), 'prod') != 0) {
            $path .= app('env') . '/';
        }
        $path .= 'picture/' . $user->id . date('/Y-m/d/*');
        $sts = new Sts();

        $config = [
            'url'             => 'https://sts.tencentcloudapi.com/',
            'domain'          => 'sts.tencentcloudapi.com',
            'proxy'           => '',
            //            'secretId' => $this->config['app_id'], // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            //            'secretKey' => $this->config['secret'], // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            'secretId'        => 'AKID2xd2B4hGmCzavzqdMtFTWLuDH5cpnpdB', // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            'secretKey'       => 'NXSL8mDO0OYWDftugDUXVGsQwITRCjNo', // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            'bucket'          => 'sw-cdn-1255862984', // 换成你的 bucket
            'region'          => 'ap-beijing', // 换成 bucket 所在园区
            'durationSeconds' => 3600, // 密钥有效期
            'allowPrefix'     => $path,
            'allowActions'    => [
                // 所有 action 请看文档 https://cloud.tencent.com/document/product/436/31923
                // 简单上传
                'name/cos:PutObject',               //上传一个对象至存储桶
                'name/cos:PostObject',              //使用表单请求上传对象
                //                // 分片上传
                'name/cos:InitiateMultipartUpload', //初始化分块上传
                'name/cos:ListMultipartUploads',    //查询正在进行中的分块上传信息
                'name/cos:ListParts',               //查询特定分块上传操作中的已上传的块
                'name/cos:UploadPart',              //分块上传文件
                'name/cos:CompleteMultipartUpload'  //完成整个文件的分块上传
            ]
        ];
        $data = $sts->getTempKeys($config);
        $data['path'] = $path;
        $data['bucket'] = $config['bucket'];
        $data['region'] = $config['region'];
        return $data;
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
        $type = $this->type($ext);
        if (!strcmp(app('env'), 'prod')) {
            $path = $type . date('/Y/m/');
        } else {
            $path = app('env') . '/' . $type . date('/Y/m/');
        }
        $name = uniqid();
        if ($ext) {
            $name = $name . '.' . $ext;
        }
        $oss = new Client([
            'region'      => 'ap-beijing',
            'credentials' => [
                'secretId'  => $this->config['app_id'],
                'secretKey' => $this->config['secret'],
            ]
        ]);
        $oss->upload('cdn-1305937303', $path . $name, $file->getRealPath());
        $data['url'] = $this->domain . $path . $name;
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
