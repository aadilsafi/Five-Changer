<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PartnerPanelAccessMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        if (!$user || !$user->hasRole('Partner')) {
            // If user is an admin, redirect them to admin panel
            if ($user && $user->hasRole('Admin')) {
                return redirect('/admin');
            }

            // Otherwise, redirect to login
            return redirect('/partner-area/login');
        }

        return $next($request);
    }
}
