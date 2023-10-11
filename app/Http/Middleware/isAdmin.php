<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Usernotnull\Toast\Toast;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(Auth::user()->role->role);

        if (Auth::user()->role->role == 'admin') {
            return $next($request);
        }
        notify()->error('ليس لديك صلاحيات');
        return redirect()->route('dashboard');
    }
}
