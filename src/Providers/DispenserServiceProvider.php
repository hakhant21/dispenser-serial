<?php

namespace Serials\Communications\Providers;

use Serials\Communications\Dispenser;
use Illuminate\Support\ServiceProvider;

class DispenserServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../../config/config.php' => config_path('dispenser.php'),
            ], 'dispenser');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'dispenser');

        // Register the main class to use with the facade
        $this->app->singleton('dispenser', function ($app) {
            $configs = $app['config']->get('dispenser');
            
            return new Dispenser($configs['type'], $configs['brand'], $configs['configs']);
        });
    }
}
