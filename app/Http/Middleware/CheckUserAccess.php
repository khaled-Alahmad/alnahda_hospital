<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserAccess
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
        $isPatient = Auth::user()->role->role == 'patient'; // افحص هنا إذا كان المستخدم مريض.

        // إذا مر أحد الشروط (OR)، قم بالسماح بالوصول.
        if ($isAdmin || $isDoctor || $isPatient) {
            return $next($request);
        }
        notify()->error('ليس لديك صلاحيات');
        return redirect()->route('dashboard');
    }
}
