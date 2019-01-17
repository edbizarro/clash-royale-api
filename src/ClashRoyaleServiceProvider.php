<?php

namespace Edbizarro\ClashRoyale;

use Illuminate\Support\ServiceProvider;

class ClashRoyaleServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

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

        $this->offerPublishing();
        
        Api::setApiToken(config('clash-royale.token'));
    }

    protected function offerPublishing(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/clash-royale.php' => config_path('clash-royale.php'),
            ], 'clash-royale');
        }
    }
}
