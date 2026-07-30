<?php

namespace Molitor\BladeUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Molitor\BladeUi\Services\SiteSettingForm;
use Molitor\Setting\Services\SettingHandler;

class BladeUiServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'blade-ui');

        Blade::componentNamespace('Molitor\\BladeUi\\View\\Components', 'ui');
        Blade::anonymousComponentPath(__DIR__.'/../../resources/views/components', 'ui');

        $this->app->make(SettingHandler::class)->registerSettingForm(SiteSettingForm::class);
    }
}
