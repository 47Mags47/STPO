<?php

namespace App\Http\Middleware\Accept;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserLoggedAdministrators
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        return (auth()->user()->role_id == 1 or auth()->user()->role_id == 2)
            ? $next($request)
            : back();
    }
}
