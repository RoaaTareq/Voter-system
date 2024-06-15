<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\PersonalityMatchingService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->singleton(PersonalityMatchingService::class, function ($app) {
            return new PersonalityMatchingService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
