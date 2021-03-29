<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (strstr($request->path(), "login")) { //登陆页
            if (!isset($_SESSION['user_id'])) { // 未登录
                return $next($request);
            } else {
                return redirect("/");
            }
        }
        if (!isset($_SESSION['user_id'])) {
            return redirect("/login/main");
        }
        return $next($request);
    }
}
