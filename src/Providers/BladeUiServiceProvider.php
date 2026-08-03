<?php

namespace Molitor\BladeUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'blade-ui');

        Blade::componentNamespace('Molitor\\BladeUi\\View\\Components', 'ui');
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/components', 'ui');

        $this->publishes([
            __DIR__.'/../config/blade-ui.php' => config_path('blade-ui.php'),
        ], 'blade-ui');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-ui.php', 'blade-ui');
    }
}
