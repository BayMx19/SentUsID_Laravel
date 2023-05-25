<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            $userRole = auth()->user()->user_role;
            
            if ($userRole == 'Admin' && ($request->is('dashboard-user') || $request->is('dashboard-superadmin'))) {
                return redirect('dashboard-mitra');
            } elseif ($userRole == 'User' && ($request->is('dashboard-mitra') || $request->is('dashboard-superadmin'))) {
                return redirect('dashboard-user');
            } elseif ($userRole == 'SuperAdmin' && ($request->is('dashboard-user') || $request->is('dashboard-mitra'))) {
                return redirect('dashboard-superadmin');}
        }
        
        return $next($request);
    }
}
