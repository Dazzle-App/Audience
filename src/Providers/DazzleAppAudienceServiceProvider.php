<?php

namespace DazzleApp\Audience\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class DazzleAppAudienceServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('audienceSignUp', function () {
            return view('audience::form');
        });

        $this->loadMigrationsFrom(__DIR__ . '/../bootstrap/migrations');

        $this->loadRoutesFrom(__DIR__ . '/../bootstrap/routes/routes.php');

        $this->loadViewsFrom(__DIR__ . '/../views', 'audience');

        $this->publishes([
            __DIR__ . '/../bootstrap/config/audience.php' => config_path('audience.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
