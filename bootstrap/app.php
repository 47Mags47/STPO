<?php
use App\Http\Middleware\Accept\UserAccessModul;
use App\Http\Middleware\Accept\UserLoggedAdministrators;
use App\Http\Middleware\Moduls\UserAdminModul;
use App\Http\Middleware\Moduls\UserUserModul;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        //api: __DIR__.'/../routes/api/api.php',
        commands: __DIR__.'/../routes/console.php',
        channels: __DIR__.'/../routes/channels.php',
        health: '/up',
        then: function(){
            Route::middleware(['web'])->group([
                base_path('routes/web/Main/auth.php'),
                base_path('routes/web/Main/dashboard.php'),

                base_path('routes/web/CSVI/cert.php'),
                base_path('routes/web/CSVI/appeal.php'),

                base_path('routes/web/OOR/inv.php'),

                base_path('routes/web/ORVDKN/veteran.php'),
            ]);
            Route::post('/postUser', [\App\Http\Controllers\api\CopyController::class, 'user']);
            Route::post('/postAppeal', [\App\Http\Controllers\api\CopyController::class, 'appeal']);
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'logget-administrators' => UserLoggedAdministrators::class,

            'modul-access' => UserAccessModul::class,
            'modul-admin' => UserAdminModul::class,
            'modul-user' => UserUserModul::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
