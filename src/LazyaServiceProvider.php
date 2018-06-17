<?php

namespace remindbg\lazya;

use Illuminate\Support\ServiceProvider;

class LazyaServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Lazya::class, function () {
            return new Lazya();
        });

        $this->app->alias(Lazya::class, 'lazya');
    }
}
