<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class SuperAdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
   public function handle(Request $request, Closure $next): Response
   {
        if (!Auth::check() || Auth::user()->name !== 'Super Admin') {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Access denied. You must be a Super Admin to access this page.');
        }

        return $next($request);
    }
}



