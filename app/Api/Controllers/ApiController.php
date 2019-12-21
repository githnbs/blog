<?php

namespace App\Api\Controllers;

use App\Api\Helpers\ApiResponse;
use App\Http\Controllers\Controller;

class ApiController extends Controller
{

    use ApiResponse;
    /**
     * 其他通用的Api帮助函数
     * 1.返回正确信息
     * return $this->success('用户登录成功...');
     * 2. 返回正确资源信息
     * return $this->success($user);
     * 3. 返回自定义 http 状态码的正确信息
     * return $this->setStatusCode(201)->success('用户登录成功...');
     * 4. 返回错误信息
     * return $this->failed('用户注册失败');
     * 5. 返回自定义 http 状态码的错误信息
     * return $this->failed('用户登录失败',401);
     * 6. 返回自定义 http 状态码的错误信息，同时也想返回自己内部定义的错误码
     * return $this->failed('用户登录失败',401,10001);
     * 默认 success 返回的状态码是 200，failed 返回的状态码是 400
     */
    
}