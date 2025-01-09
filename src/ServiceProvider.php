<?php

class ServiceProvider extends Illuminate\Support\ServiceProvider
{
    public function boot()
    {
        // Publish configuration
        $this->publishes([
            __DIR__ . '/../config/my-laravel-package.php' => config_path('my-laravel-package.php'),
        ], 'config');
    }

    public function register()
    {
        // Merge configuration
        $this->mergeConfigFrom(
            __DIR__ . '/../config/my-laravel-package.php',
            'my-laravel-package'
        );

        // Bind the main class to the container
        $this->app->singleton('debugger', function () {
            return new Debugger();
        });
    }
}