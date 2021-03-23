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
        if(strstr($request->path(), "login")) {
            return $next($request);
        }
        if (!isset($_SESSION['user_id'])) {
            return redirect("/login/main");
        }
        return $next($request);
    }
}
