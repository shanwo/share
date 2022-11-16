<?php
/**
 * User: Powerless
 * Date: 22/11/16
 * Blog: https://wzxaini9.cn
 */

namespace App\Http\Controllers;

use App\Services\ProtocolService;
use Illuminate\Http\Request;

class ProtocolController extends Controller
{
    protected $protocolService;

    public function __construct(Request $request)
    {
        parent::__construct($request);
        $this->protocolService = new ProtocolService();
    }

    public function info()
    {
        $this->validate([
            'type' => 'required|integer|between:1,4',
        ], [
            'type' => '协议类型',
        ]);
        if ($this->msg) {
            return $this->returnApi();
        }
        $appId = $this->request->header('appid');
        $type = $this->request->input('type');
        $data = $this->protocolService->info($appId,$type);
        $this->code = 200;
        return $this->returnApi($data);
    }
}