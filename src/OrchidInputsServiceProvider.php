<?php

namespace Easy\OrchidInputs;

use Closure;
use \Illuminate\Support\ServiceProvider;

class OrchidInputsServiceProvider extends ServiceProvider {

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/views','orchid-inputs');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/orchid-inputs.php','orchid-inputs');
        $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'orchid-inputs');
        $this->publishes([
            __DIR__.'/config/orchid-inputs.php' => config_path('orchid-inputs.php'),
            __DIR__.'/resources/lang' => resource_path('orchid-inputs'),
        ]);
    }

    public function register()
    {

    }

}
