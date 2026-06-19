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
    }
}
