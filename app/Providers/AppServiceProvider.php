<?php

namespace App\Providers;

use App\Models\Csvi\Csvi_Appeal_Appeal;
use App\Models\Main\Main_Access;
use App\Models\Main\Main_Modul;
use App\Models\Main\Main_User;
use Illuminate\Pagination\Paginator;
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
        Paginator::defaultView('components.paginate.default');

        /* РОЛИ */
        Gate::define('is_admin', function () {
            return auth()->user()->role_id == 1;
        });

        Gate::define('is_moderator', function () {
            return auth()->user()->role_id == 2;
        });

        Gate::define('is_administration', function () {
            return auth()->user()->role_id == 1 or auth()->user()->role_id == 2;
        });

        Gate::define('is_ministry', function () {
            return auth()->user()->division_id == 1 or auth()->user()->division_id == 2;
        });

        /* Модули */
        Gate::define('modul-access', function (Main_User $user, Main_Modul $modul) {
            return Main_Access::where('modul_id', $modul->id)
                ->where('user_id', $user->id)
                ->get()
                ->first()
                ? true
                : false;
        });

        Gate::define('modul-admin', function (Main_User $user, Main_Modul $modul) {
            return Main_Access::where('modul_id', $modul->id)
                ->where('user_id', $user->id)
                ->where('level_id', 4)
                ->get()
                ->first()
                ? true
                : false;
        });

        Gate::define('modul-user', function (Main_User $user, Main_Modul $modul) {
            return Main_Access::where('modul_id', $modul->id)
                ->where('user_id', $user->id)
                ->where('level_id', 2)
                ->get()
                ->first()
                ? true
                : false;
        });

        /* ОБРАЩЕНИЯ */
        Gate::define('appeal-access', function (Main_User $user, Csvi_Appeal_Appeal $appeal) {
            return auth()->user()->id == $appeal->sender_id or auth()->user()->id == $appeal->worker_id;
        });
    }
}
