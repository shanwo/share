<?php
/**
 * User: Powerless
 * Date: 2021/6/20
 * Blog: https://wzxaini9.cn
 */

namespace App\Services;

use App\Models\TagModel;
use App\Models\UserTagModel;
use Illuminate\Support\Facades\Redis;

class Service
{
    const ORDER_CREATE    = 10;
    const ORDER_CANCEL    = 20;
    const ORDER_SUCCESS   = 30;
    const ORDER_FAIL      = 40;
    const ORDER_REFUND    = 50;
    const USER_ENABLE     = 1;
    const USER_VIP        = 2;
    const USER_DISABLE    = 3;
    const PAGE_MIN        = 1;
    const PAGE_MAX        = 4;
    const DELETE_YES      = -1;
    const DELETE_NO       = 1;
    const ENABLE          = 1;
    const DISABLE         = -1;
    const SORT_ALL        = 0;
    const SORT_DECORATION = 1;
    const SORT_TUTORIALS  = 2;
    const SORT_TEMPLATE   = 3;
    const SORT_lINT       = 4;
    public $redis;
    public $page = 1;
    public $size = 10;
    public $oneDay = 86400;
    protected $tagModel;
    protected $userTagModel;

    public function __construct()
    {
        $this->redis = new Redis();
        $this->tagModel = new TagModel();
        $this->userTagModel = new UserTagModel();
    }

    public function configInfo($name)
    {
        $config = $this->redis::GET('config:' . $name);
        if ($config) $data = json_decode($config, true);
        $data['name'] = $name;
        return $data;
    }

    public function setTag($key, $uid, $value)
    {
        $tag = $this->redis::HGET('tags', $key);
        if (!$tag) {
            $lists = $this->tagModel->select('id', 'mark')->where(['status' => 1, 'is_delete' => Service::DELETE_NO])->get()->toArray();
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
}
