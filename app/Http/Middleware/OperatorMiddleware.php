<?php


namespace App\Http\Middleware;

use Closure;
use Auth;

class OperatorMiddleware
{
    /**
     * Handle an incoming request.
     * 站点后台未登录则跳转,登录用户跳转判断
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null(Auth::guard('site')->user())) {
            return redirect()->route('site.login');
        }

        return $next($request);
    }
}