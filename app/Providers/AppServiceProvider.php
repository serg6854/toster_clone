<?php

namespace App\Providers;

use App\Services\ProfileMenu;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        app()->bind('profileMenu', ProfileMenu::class);

        Paginator::defaultView('vendor.pagination.default');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }
}
