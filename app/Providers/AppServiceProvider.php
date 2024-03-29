<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
        Carbon::setLocale('es');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once app_path() . '/Http/helpers.php';
    }
}
