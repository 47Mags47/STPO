<?php

namespace App\Http\Middleware\Moduls;

use App\Models\Main\Main_Access;
use App\Models\Main\Main_Modul;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UserUserModul
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $link): Response
    {
        $modul_id = Main_Modul::where('link', $link)->get('id')->pluck('id')->first();

        return Main_Access::where('modul_id', $modul_id)
            ->where('user_id', auth()->user()->id)
            ->where('level_id', 2)
            ->count() > 0
            ? $next($request)
            : abort(403);
    }
}
