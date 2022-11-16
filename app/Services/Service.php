<?php
/**
 * User: Powerless
 * Date: 2021/6/20
 * Blog: https://wzxaini9.cn
 */

namespace App\Services;

use App\Models\ConfigModel;
use App\Models\TagModel;
use App\Models\UserTagModel;
use Illuminate\Support\Facades\Redis;

class Service
{
    const DELETE_YES = -1;
    const DELETE_NO  = 1;
    const ENABLE     = 1;
    const DISABLE    = -1;
    public $redis;
    public $page = 1;
    public $size = 10;
    public $oneDay = 86400;
    protected $tagModel;
    protected $configModel;
    protected $userTagModel;

    public function __construct()
    {
        $this->redis = new Redis();
        $this->tagModel = new TagModel();
        $this->configModel = new ConfigModel();
        $this->userTagModel = new UserTagModel();
    }

    public function configInfo($name)
    {
        $data = [];
        if (in_array($name, ['wechat', 'official']) && strcmp(app('env'), 'prod')) {
            $config = $this->redis::GET('config:' . $name . '-test');
        } else {
            $config = $this->redis::GET('config:' . $name);
        }
        if ($config) {
            $data = json_decode($config, true);
        } else {
            $lists = $this->configModel->where(['autoload' => 1, 'status' => Service::DELETE_NO])->get()->toArray();
            foreach ($lists as $k => $v) {
                $this->redis::SET('config:' . $v['option_name'], $v['option_value']);
                if ($v['option_name'] == $name) {
                    $data = json_decode($v['option_value'], true);
                }
            }
        }
        $data['name'] = $name;
        return $data;
    }

    public function setTag($key, $uid, $value)
    {
        $tag = $this->redis::HGET('tags', $key);
        if (!$tag) {
            $lists = $this->tagModel->select('id', 'mark')->where(['status' => Service::ENABLE])->get()->toArray();
            foreach ($lists as $k => $v) {
                if ($v['mark'] == $key) {
                    $tag = $v['id'];
                }
                $this->redis::HSET('tags', $v['mark'], $v['id']);
            }
        }
        if ($tag) {
            $userTag = $this->redis::HGET('user_tags:' . $uid, $key);
//            $userTag = $this->redis::SISMEMBER('tag_users:' . $key, $uid);
            if ($userTag) {
                $this->userTagModel->where(['user_id' => $uid, 'tag_id' => $tag])->update(['value' => $value]);
            } else {
                $lists = $this->userTagModel->select('id', 'value', 'mark')->where(['user_id' => $uid])->get()->toArray();
                foreach ($lists as $k => $v) {
                    $this->redis::SADD('tag_users:' . $v['mark'], $uid);
                    $this->redis::HSET('user_tags:' . $uid, $v['mark'], $v['value']);
                }
                $userTag = [
                    'user_id' => $uid,
                    'tag_id'  => $tag,
                    'mark'    => $key,
                    'value'   => $value
                ];
                $this->userTagModel->insertGetId($userTag);
            }
            $this->redis::SADD('tag_users:' . $key, $uid);
            $this->redis::HSET('user_tags:' . $uid, $key, $value);
        }
    }

    public function getRealIp()
    {
        $ip = data_get($_SERVER, 'HTTP_X_FORWARDED_FOR') ?? '';
        if (strstr($ip, ",")) {#如ip果经过代理有多个,循环处理
            $ip_arr = explode(',', $ip);
            foreach ($ip_arr as $ip) {
                $ipint = sprintf('%u', ip2long($ip));#ip2long — 将 IPV4 的字符串互联网协议转换成长整型数字
                if ($ipint >= 0 && $ipint <= 50331647 || // {"0.0.0.0","2.255.255.255"},
                    $ipint >= 167772160 && $ipint <= 184549375 || // {"10.0.0.0","10.255.255.255"},
                    $ipint >= 2130706432 && $ipint <= 2147483647 || // {"127.0.0.0","127.255.255.255"},
                    $ipint >= 2851995648 && $ipint <= 2852061183 || // {"169.254.0.0","169.254.255.255"}
                    $ipint >= 2886729728 && $ipint <= 2887778303 || // {"172.16.0.0","172.31.255.255"},
                    $ipint >= 3221225984 && $ipint <= 3221226239 || // {"192.0.2.0","192.0.2.255"},
                    $ipint >= 3232235520 && $ipint <= 3232301055 || // {"192.168.0.0","192.168.255.255"},
                    $ipint >= 4294967040 && $ipint <= 4294967295 // {"255.255.255.0","255.255.255.255"}
                ) {
                    continue;
                } else {
                    break;
                }
            }
        }
        return trim($ip);
    }
}
