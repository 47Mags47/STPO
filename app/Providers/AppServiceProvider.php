<?php

namespace App\Providers;

use App\Models\CSVI\Appeal\Appeal;
use App\Models\Main\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Pagination\Paginator;
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
        Paginator::defaultSimpleView('components.paginate.default');


        Gate::define('accept-appeal', function (User $user, Appeal $appeal) {
            return ($appeal->status_code === 'created' and $appeal->sender_id !== $user->id) or ($appeal->status_code === 'restored' and user()->hasPermission('appeal-work'));
        });

        Gate::define('close-appeal', function (User $user, Appeal $appeal) {
            return
                in_array($appeal->status_code, ['created', 'accepted', 'restored'])
                and (
                    $appeal->sender_id === $user->id or $appeal->hasWorker($user)
                );
        });

        Gate::define('restore-appeal', function (User $user, Appeal $appeal) {
            return $appeal->status_code === 'closed'
            and (
                $appeal->sender_id === $user->id or $appeal->hasWorker($user)
            );
        });
    }
}
