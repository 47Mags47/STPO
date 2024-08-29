<?php

namespace App\Http\Middleware;

use App\Models\Main\Main_Modul;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserHasModul
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $link): Response
    {
        $modul = Main_Modul::where('link', $link)->get()->first();
        if (auth()->user()->can('user-has-modul', $modul)) {
            return $next($request);
        }
        return back();
    }
}
