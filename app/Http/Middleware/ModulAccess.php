<?php

namespace App\Http\Middleware;

use App\Models\Main\Modul;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ModulAccess
{
    /**
     * Handle an incoming request.
     * @param string $modul
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, string $modul): Response
    {
        $modul = Modul::whereKey($modul)->first();

        if ($modul === null)
            throw new \Exception('Неверное наименование модуля');

        if ($modul->userAccess())
            return $next($request);

        return abort(401, 'Доступ текущему пользователю запрещен');
    }
}
