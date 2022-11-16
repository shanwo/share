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
        $info['name'] = '';
        $info['desc'] = '';
        return $info;
    }
}