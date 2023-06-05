<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (auth()->user() && auth()->user()->user_role === 'User') {
            return $next($request);
        }
        
        return redirect()->back()->with('toast_error','Anda tidak memiliki izin untuk mengakses halaman ini.');
    }
}
