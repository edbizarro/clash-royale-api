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
        $this->registerPublishing();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/clash-royale.php',
            'clash-royale'
        );

        Api::setApiToken(config('clash-royale.token'));
    }

    protected function registerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/clash-royale.php' => config_path('clash-royale.php'),
            ], 'clash-royale');
        }
    }
}
