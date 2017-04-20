<?php


namespace App\Http\Middleware;

use Closure;
use Auth;

class MerchantMiddleware
{
    /**
     * Handle an incoming request.
     * 档口后台未登录则跳转,登录用户跳转判断
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (is_null(Auth::guard('store')->user())) {
            return redirect()->route('store.login');
        }

        return $next($request);
    }
}