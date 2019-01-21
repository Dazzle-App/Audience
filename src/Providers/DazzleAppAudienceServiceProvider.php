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
        Blade::directive('audienceSignUp', function ($expression) {
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });

        $this->loadMigrationsFrom(__DIR__ . '/../bootstrap/migrations');

        $this->loadRoutesFrom(__DIR__.'/../bootstrap/routes/routes.php');

        $this->loadViewsFrom(__DIR__.'/../views', 'audience');
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
