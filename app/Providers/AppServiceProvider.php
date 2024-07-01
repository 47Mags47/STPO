<?php

namespace App\Providers;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Main\Main_Access;
use App\Models\Main\Main_Modul;
use App\Models\Main\Main_User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('is_admin', function () {
            return auth()->user()->role_id == 1;
        });

        Gate::define('is_moderator', function () {
            return auth()->user()->role_id == 2;
        });

        Gate::define('is_administration', function () {
            return auth()->user()->role_id == 1 or auth()->user()->role_id == 2;
        });

        Gate::define('user_has_modul', function (Main_User $user, Main_Modul $modul) {
            return
                $user->role_id == 1
                or ($user->role_id == 2 and $modul->visible and Route::has($modul->link))
                or (Main_Access::where('user_id', $user->id)->where('modul_id', $modul->id)->count() > 0 and $modul->visible and Route::has($modul->link))
            ;
        });

        Gate::define('appeal-job', function(Main_User $user, Csvi_Appeal_Appeal $appeal){
            return auth()->user()->id == $appeal->sender_id or auth()->user()->id == $appeal->worker_id;
        });
    }
}
