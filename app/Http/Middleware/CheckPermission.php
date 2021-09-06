<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Gate;
use UtilService;
use JWTAuth;

class CheckPermission
{
    const AJAX_NO_AUTH = 99999;

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //此处用auth()->user() 不会报token失效异常
        $userObj = JWTAuth::parseToken()->authenticate();
        $path = $request->path(); //接口路径
        $pattern = '/(\d+)/i'; //替换数字为{id}
        $path = preg_replace($pattern, '{id}', $path);
        $flag = false;
        if($userObj->type == 'admin'){
            $flag = true;
        }
        else {
            $permissions = \App\Permission::where('api_url', 'like', '%'.$path.'%')->get();
            foreach ($permissions as $permission) {
                if (Gate::allows($path, $permission)) {
                    $flag = true;
                    break;
                }
            }
        }

        if ($flag) {
            return $next($request);
        }
        else{
            return response(UtilService::format_data(self::AJAX_NO_AUTH, '没有权限', ''), 402);
        }
    }
}
