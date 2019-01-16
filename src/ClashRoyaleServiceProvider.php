<?php

namespace Edbizarro\ClashRoyale;

use Illuminate\Support\ServiceProvider;

class ClashRoyaleServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/clash-royale.php' => config_path('clash-royale.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/clash-royale.php', 'clash-royale');
    }
}
