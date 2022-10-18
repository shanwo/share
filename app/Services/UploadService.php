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
    public function secret()
    {
        $path = '/'.env('APP_NAME').'/';
        if (strcmp(env('APP_ENV'), 'prod') != 0) {
            $path .= app('env').'/';
        }
        $path .= 'picture' . date('/Y/m/*');
        $sts = new Sts();

        $config = [
            'url' => 'https://sts.tencentcloudapi.com/',
            'domain' => 'sts.tencentcloudapi.com',
            'proxy' => '',
//            'secretId' => $this->config['app_id'], // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
//            'secretKey' => $this->config['secret'], // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            'secretId' => 'AKIDhIk172aRs7B5oLbwzqW1LUREqHXc4HrH', // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            'secretKey' => 'Mr5C7tTr460kIfsttjR0OabR5YpwrbAY', // 固定密钥,若为明文密钥，请直接以'xxx'形式填入，不要填写到getenv()函数中
            'bucket' => 'sw-cdn-1255862984', // 换成你的 bucket
            'region' => 'ap-beijing', // 换成 bucket 所在园区
            'durationSeconds' => 3600, // 密钥有效期
            // 允许操作（上传）的对象前缀，可以根据自己网站的用户登录态判断允许上传的目录，例子： user1/* 或者 * 或者a.jpg
            // 请注意当使用 * 时，可能存在安全风险，详情请参阅：https://cloud.tencent.com/document/product/436/40265
            //            'allowPrefix' => $path,
            'allowPrefix' => '/*',
            // 密钥的权限列表。简单上传和分片需要以下的权限，其他权限列表请看 https://cloud.tencent.com/document/product/436/31923
            'allowActions' => [
                // 所有 action 请看文档 https://cloud.tencent.com/document/product/436/31923
                // 简单上传
                'name/cos:PutObject',               //上传一个对象至存储桶
                'name/cos:PostObject',              //使用表单请求上传对象
//                // 分片上传
//                'name/cos:InitiateMultipartUpload', //初始化分块上传
//                'name/cos:ListMultipartUploads',    //查询正在进行中的分块上传信息
//                'name/cos:ListParts',               //查询特定分块上传操作中的已上传的块
//                'name/cos:UploadPart',              //分块上传文件
//                'name/cos:CompleteMultipartUpload'  //完成整个文件的分块上传
            ]
        ];
        return $sts->getTempKeys($config);
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
