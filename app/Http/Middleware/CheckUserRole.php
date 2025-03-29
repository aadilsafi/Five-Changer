<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = Auth::user();

        // Only allow users with 'admin' or 'partner' roles to access the panel
        if (!$user || !$user->hasAnyRole(['Admin'])) {
            abort(403, 'Unauthorized access.');
        }

        return $next($request);
    }
}
