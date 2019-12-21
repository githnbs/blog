<?php

namespace App\Api\Controllers\FromWeixinControllers;


use Illuminate\Http\Request;
use App\Api\Controllers\ApiController;
use App\Api\Services\CheckTokenService;

class CheckTokenController extends ApiController
{
    public function index(Request $request)
    {
        $timestamp =  $request->get('timestamp');
        $nonce = $request->get('nonce');
        $signature =  $request->get('signature');
        $bool =  CheckTokenService::checkSignature($timestamp, $nonce, $signature);
        $this->success($bool);
    }
}
