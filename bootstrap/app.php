<?php

use App\Http\Middleware\UserHasModul;
use App\Http\Middleware\UserModulAdminer;
use App\Http\Middleware\UserModulUser;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        //api: __DIR__.'/../routes/api/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function(){
            Route::middleware(['web'])->group([
                base_path('routes/web/Main/auth.php'),
                base_path('routes/web/Main/dashboard.php'),
                base_path('routes/web/Main/appeal.php'),
                base_path('routes/web/Oor/inv.php'),
            ]);
            Route::post('/postUser', [\App\Http\Controllers\api\CopyController::class, 'user']);
            Route::post('/postAppeal', [\App\Http\Controllers\api\CopyController::class, 'appeal']);
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'has-access' => UserHasModul::class,
            'modul-admin' => UserModulAdminer::class,
            'modul-user' => UserModulUser::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
