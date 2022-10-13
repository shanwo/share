<?php
/**
 * User: Powerless
 * Date: 2021/6/20
 * Blog: https://wzxaini9.cn
 * Tips: 用户模块
 */

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->userService = new UserService();
    }
    public function applets()
    {
        $this->validate([
            'code'           => 'required|string|max:64',
            'encrypted_data' => 'required|string|max:1024',
            'iv'             => 'required|string|max:32',
            'raw_data'       => 'required|json',
            'signature'      => 'required|alpha_num|max:64',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }

        $option = $this->optionService->info('tencent_app_settings');
        $appSettings = json_decode($option['option_value'], true);
        $appId = $this->request->header('xcx-app-appid', $this->request->server->get('xcx-app-appid'));
        if (empty($appSettings['apps'][$appId])) {
            $this->msg = '小程序不存在';
            return $this->returnApi();
        }
        $type = $this->request->header('xcx-device-type', $this->request->server->get('xcx-device-type'));
        $secret = $appSettings['apps'][$appId]['app_secret'];
        $jsCode = $this->request->input('code');
        $body = $this->getSession($appId, $secret, $jsCode, $type);
        if (!$body) {
            $this->msg = '授权操作失败';
            return $this->returnApi();
        }
        $encrypted_data = $this->request->input('encrypted_data');
        $iv = $this->request->input('iv');
        $pc = new WXBizDataCrypt($appId, $body['session_key']);
        $res = $pc->decryptData($encrypted_data, $iv, $appData);
        if ($res) {
            $this->msg = '授权验证失败';
            return $this->returnApi();
        }
        $rawJson = $this->request->input('raw_data', '');
        if ($rawJson) {
            $rawArr = json_decode($rawJson);
            $appData = (object)array_merge((array)$appData, (array)$rawArr);
        }
        $appData->type = $type;
        $appData->ip = $this->request->ip();
        $appData = json_decode(json_encode($appData), true);
        $third = $this->userService->thirdInfo($appData);
        if ($third) {
            $this->userService->thirdEdit($appData, $third);
        } else {
            $third['user_id'] = $this->userService->add($appData);
            $third['id'] = $this->userService->thirdAdd($appData, $third['user_id']);
        }
        $data = $this->userService->info(['id' => $third['user_id']]);
        if (!$data['user_status']) {
            $this->msg = '账号涉嫌违规，禁止登录';
            return $this->returnApi();
        }
        $token = $this->userService->token($third['user_id'], $type);
        $data['token'] = $token;
        $arr = [$third['user_id'] => md5(dechex($third['user_id']))];
        $this->service->redis::setex('user:' . $token, 60 * 60 * 24 * 180, json_encode($arr));
        $this->code = 200;
        return $this->returnApi($data);
    }

    public function signIn()
    {
        $this->validate([
            'type'   => 'required|alpha_num|in:official,wechat',
            'secret' => 'filled|string|between:64,256',         //账号绑定密钥
        ], [
            'type'   => '登录类型',
            'secret' => '密钥',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }
        $type = $this->request->input('type');
        $data = $this->userService->driver($type);
        $url = $data->redirect();
        $secret = $this->request->input('secret', '');
        if ($secret) {
            $auth = $this->passportDecrypt($secret, $type);
            $arr = json_decode($auth, true) ?? [];
            foreach ($arr as $k => $v) {
                if ($v == md5(dechex($k))) {
                    parse_str(parse_url($url, PHP_URL_QUERY), $query);
                    $this->service->redis::setex('signIn:' . $type . ':' . $query['state'], $this->service->oneDay / (24 * 6), $k);
                }
            }
        }
        $this->code = 200;
        return $this->returnApi(['redirect_url' => $url]);
    }

    public function signOut()
    {
        $this->code = 200;
        $this->service->redis::DEL('user_tokens:' . $this->request->user()->api_token);
        return $this->returnApi();
    }

    public function info()
    {
        $this->validate([
            'id' => 'nullable|integer|gt:0|exists:sw_user,id',
        ], [
            'id' => 'ID',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }
        $id = $this->request->input('id', $this->request->user()->id ?? 0);
        $data = $this->userService->info($id);
        unset($data['api_token']);
//        $data['binding'] = $this->bindSecret($id);
        $this->code = 200;
        return $this->returnApi($data);
    }

    public function edit()
    {
        $this->validate([
            'area_id'        => 'required|integer|gt:0|exists:cn_area,id',
            'avatar'         => 'required|url|max:128',
            'nickname'       => 'required|string|between:2,32',
            'sex'            => 'nullable|integer|between:0,2',
            'birthday'       => 'nullable|date_format:Y-m-d|after_or_equal:1950-01-01|before_or_equal:' . date('Y-m-01', strtotime('-1 month')),
            'contact'        => 'nullable|array',
            'contact.wechat' => 'nullable|alpha_dash|between:6,20',
            'contact.phone'  => 'nullable|integer|between:13000000000,19999999999',
            'contact.qq'     => 'nullable|integer|between:10000,9999999999',
            'contact.weibo'  => 'nullable|string|between:4,32',
            'contact.email'  => 'nullable|email|between:8,32',
        ], [
            'area_id'        => '省市区',
            'avatar'         => '头像地址',
            'nickname'       => '昵称',
            'sex'            => '性别',
            'birthday'       => '生日',
            'contact'        => '联系方式',
            'contact.wechat' => '微信号',
            'contact.phone'  => '手机号',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }
        $data = $this->userService->edit($this->request);
        $this->code = 200;
        return $this->returnApi($data);
    }

    private function bindSecret($id)
    {
        $secret = json_encode([$id => md5(dechex($id))]);
        return [
            'douban'   => $this->passportEncrypt($secret, 'douban'),
            'douyin'   => $this->passportEncrypt($secret, 'douyin'),
            'facebook' => $this->passportEncrypt($secret, 'facebook'),
            'feishu'   => $this->passportEncrypt($secret, 'feishu'),
            'github'   => $this->passportEncrypt($secret, 'github'),
            'google'   => $this->passportEncrypt($secret, 'google'),
            'linkedin' => $this->passportEncrypt($secret, 'linkedin'),
            'outlook'  => $this->passportEncrypt($secret, 'outlook'),
            'qq'       => $this->passportEncrypt($secret, 'qq'),
            'taobao'   => $this->passportEncrypt($secret, 'taobao'),
            'wechat'   => $this->passportEncrypt($secret, 'wechat'),
            'weibo'    => $this->passportEncrypt($secret, 'weibo'),
            'wework'   => $this->passportEncrypt($secret, 'wework'),
        ];
    }

    /**
     * 第三方登录回调
     */
    public function official()
    {
        $this->validate([
            'code'  => 'required|alpha_num|size:32',
            'state' => 'filled|alpha_num|between:32,64',
        ], [
            'code'  => '编码',
            'state' => '状态',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }
        $data = $this->userService->signInResult($this->request, 'official');
        if (!empty($data['msg'])) {
            $this->msg = $data['msg'];
            return $this->returnApi();
        }
        $this->code = 200;
        return $this->returnApi($data);
    }

    public function wechat()
    {
        $this->validate([
            'code'  => 'required|alpha_num|size:32',
            'state' => 'filled|alpha_num|between:32,64',
        ], [
            'code'  => '编码',
            'state' => '状态',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }
        $data = $this->userService->signInResult($this->request, 'wechat');
        if (!empty($data['msg'])) {
            $this->msg = $data['msg'];
            return $this->returnApi();
        }
        $this->code = 200;
        return $this->returnApi($data);
    }
}
