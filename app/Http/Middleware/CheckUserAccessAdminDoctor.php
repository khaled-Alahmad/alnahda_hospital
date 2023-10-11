<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserAccessAdminDoctor
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $isAdmin = Auth::user()->role->role == 'admin'; // افحص هنا إذا كان المستخدم مدير.
        $isDoctor = Auth::user()->role->role == 'doctor'; // افحص هنا إذا كان المستخدم طبيب.

        if ($isAdmin || $isDoctor) {
            return $next($request);
        }
        notify()->error('ليس لديك صلاحيات');
        return redirect()->route('dashboard');
    }
}
