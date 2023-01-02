<?php

namespace App\Services;

use App\Models\FeedbackModel;
use App\Models\ReplyModel;
use App\Models\UserThirdModel;
use GuzzleHttp\Client;

class OfficialServe extends Service
{
    protected $replyModel;
    protected $feedbackModel;
    protected $userThirdModel;

    public function __construct()
    {
        parent::__construct();
        $this->replyModel = new ReplyModel();
        $this->feedbackModel = new FeedbackModel();
        $this->userThirdModel = new UserThirdModel();
    }

    private function reply($message)
    {
        $keyword = '关注';
        if (!empty($message['Content'])) {
            $keyword = trim($message['Content']);
            $keyword = str_ireplace('。', '', $keyword);
        }
        $data = [];
        $reply = $this->redis::HGET('reply', $keyword);
        if ($reply) {
            $data = json_decode($reply, true);
        } else {
            $where[] = ['status', '=', Service::DELETE_NO];
            $lists = $this->replyModel->select('id', 'type', 'keyword', 'comment')->where($where)->get()->toArray();
            foreach ($lists as $k => $v) {
                $number = $this->redis::ZSCORE('reply_number', $v['keyword']);
                if ($number) {
                    $this->replyModel->whereKey($v['id'])->increment('number', $number);
                    $this->redis::ZREM('reply_number', $v['keyword']);
                }
                $msg = [];
                $comment = json_decode($v['comment'], true);
                $msg['MsgType'] = ucfirst($v['type']);
                if (!in_array($v['type'], ['text', 'news'])) {
                    $msg[$msg['MsgType']] = $comment;
                } else {
                    if ($v['type'] == 'news') {
                        $msg['ArticleCount'] = 1;
                        $msg['Articles']['item'] = $comment['item'];
                    }
                    if ($v['type'] == 'text') {
                        $msg = array_merge($msg, $comment);
                    }
                }
                $this->redis::HSET('reply', $v['keyword'], json_encode($msg, JSON_UNESCAPED_UNICODE));
                if ($v['keyword'] == $keyword) $data = $msg;
            }
        }
        if ($data) $this->redis::ZINCRBY('reply_number', 1, $keyword);
        return $data;
    }

    private function feedback($message, $config)
    {
        $keyword = trim($message['Content']);
        $sw = mb_substr($keyword, 0, 4);
        if (strcmp($sw, '#酱紫#') == 0) {
            $where = [
                ['source', '=', $config['name']],
                ['open_id', '=', $message['FromUserName']],
                ['app_id', '=', $config['app_id']],
                ['status', '=', 1]
            ];
            $userThird = $this->userThirdModel->where($where)->first(['id', 'user_id']);
            if ($userThird) {
                $insert = [
                    'user_id'  => $userThird['user_id'],
                    'contacts' => '微信公众号',
                    'content'  => mb_substr($keyword, 4)
                ];
                $this->feedbackModel->insertGetId($insert);
                return '你提交的信息已经记下啦[耶]';
            }
            return '未能获取到你的用户ID，请重新关注公众号';
        }
        return "我搞没懂你的意思哇[委屈]\n如果你有什么话，可以这样告诉我：\n#酱紫#[想说的话]\n例如：#酱紫#期待新功能哦";
    }

    private function swpay($info, $apiToken)
    {
        $form['timeout'] = 3;
        $form['json'] = ['id' => $info->id, 'type' => 'NATIVE', 'channel' => $info->channel];
        $form['headers'] = ['Authorization' => ['Bearer ' . $apiToken]];
        $url = env('APP_URL') . '/sw/pay/send';
        $api = (new Client())->post($url, $form);
        if ($api->getStatusCode() == 200) {
            $body = $api->getBody()->getContents();
            $data = json_decode($body, true);
            if ($data['code'] == 200) return $data['data']['code_url'];
            return $data['msg'];
        }
        return '发起支付失败';
    }

    /**
     * 事件回复
     * @param $message
     * @param $user
     * @param $config
     * @return string|void
     */
    public function eventType($message, $user, $config)
    {
        switch (Strtolower($message['Event'])) {
            case'subscribe':               //订阅
                (new UserService)->wechat($user, $config['name']);
                return $this->reply($message);
            case'unsubscribe':             //取消订阅
                $where[] = ['source', '=', $config['name']];
                $where[] = ['open_id', '=', $user['openid']];
                $where[] = ['app_id', '=', $config['app_id']];
                $userThird = $this->userThirdModel->from('user_third as ut')
                    ->leftJoin('user as u', 'ut.user_id', '=', 'u.id')->where($where)
                    ->first(['ut.id', 'ut.user_id', 'u.api_token']);
                $this->redis::DEL('user_tokens:' . $userThird['api_token']);
                $this->redis::DEL('user_infos:' . $userThird['user_id']);
                $this->userThirdModel->whereKey($userThird['id'])->update(['status' => 2]);
                return '等你回来啊';
            case'click':                   //点击事件
                [$action, $channel, $id] = explode(':', $message['EventKey']);
                $pay = $this->redis::HGET('pay_channel:' . $channel, $id);
                if (!$pay) return '支付渠道不存在';
                $where[] = ['ut.source', '=', $config['name']];
                $where[] = ['ut.open_id', '=', $user['openid']];
                $where[] = ['ut.app_id', '=', $config['app_id']];
                $userThird = $this->userThirdModel->from('user_third as ut')
                    ->leftJoin('user as u', 'ut.user_id', '=', 'u.id')->where($where)
                    ->first(['ut.id', 'ut.user_id', 'u.api_token']);
                if (!empty($userThird['api_token'])) $this->redis::SETEX('user_tokens:' . $userThird['api_token'], self::ONEDAY * 30, $userThird['user_id']);
                return $this->$action(json_decode($pay), $userThird['api_token']);
            default:
        }
        return '我还没有开启这个技能哇[委屈]';
    }

    public function textType($message, $config)
    {
        $text = $this->reply($message);
        if (!$text) return $this->feedback($message, $config);
        return $text;
    }

    public function voiceType($message)
    {
        if ($message['Recognition']) {
            $message['Content'] = $message['Recognition'];
            $voice = $this->reply($message);
            if (!$voice) return "你说：\n" . $message['Recognition'];
            return $voice;
        }
        return '你说啥？';
    }
}
