<?php
/**
 * User: Powerless
 * Date: 22/11/16
 * Blog: https://wzxaini9.cn
 */

namespace App\Services;

class ProtocolService extends Service
{
    public function __construct()
    {
        parent::__construct();
    }

    public function info($appId,$type)
    {
        $info['name'] = '对应小程序协议类型名称';
        $info['desc'] = "对应小程序协议类型内容,<b>富文本格式</b>";
        return $info;
    }
}