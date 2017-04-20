<?php


namespace App\Http\Middleware;

use Closure;
use Auth;

class PlatformAdminMiddleware
{
    /**
     * Handle an incoming request.
     * 平台后台后台未登录则跳转,登录用户跳转判断
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null(Auth::user())) {
            return redirect('/login');
        }

        return $next($request);
    }
}