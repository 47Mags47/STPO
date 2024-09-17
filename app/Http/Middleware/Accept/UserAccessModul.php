<?php

namespace App\Http\Middleware\Accept;

use App\Models\Main\Main_Access;
use App\Models\Main\Main_Modul;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserAccessModul
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $link): Response
    {
        $modul_id = Main_Modul::where('link', $link)->get('id')->pluck('id')->first();
        $acces_list = auth()->user()->acesses->pluck('modul_id')->toArray();

        return in_array($modul_id, $acces_list)
            ? $next($request)
            : redirect()->route('home');
    }
}
