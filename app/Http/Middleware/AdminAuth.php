<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Session;
use Symfony\Component\HttpFoundation\Response;

class AdminAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    
    // public function handle(Request $request, Closure $next)
    // {
    //     if (Auth::check() && (Auth::user()->RoleId == 1 || Auth::user()->RoleId == 2)) {
    //         return $next($request);
    //     }

    //     return redirect('/admin/login')->with('error', 'Unauthorized Access');
    // }
    public function handle(Request $request, Closure $next)
    {
        if (!Session::has('admin_id')) {
            return redirect('/admin/login')->withErrors(['email' => 'Please log in as admin']);
        }
        return $next($request);
    }
}
