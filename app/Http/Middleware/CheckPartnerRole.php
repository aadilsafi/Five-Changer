<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckPartnerRole
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && !Auth::user()->hasRole('partner')) {
            abort(403, 'You do not have permission to access the Partner Area.');
        }

        return $next($request);
    }
}
