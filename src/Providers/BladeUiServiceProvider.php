<?php

namespace Molitor\BladeUi\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
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
        ], 'blade-ui-config');

        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/blade-ui'),
        ], 'blade-ui-views');

        $this->publishes([
            __DIR__.'/../../routes/web.php' => base_path('routes/blade-ui-component-demo.php'),
        ], 'blade-ui-showcase-routes');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/blade-ui.php', 'blade-ui');
    }

    /**
     * Register the component showcase/demo routes.
     *
     * Call this from the application's routes file (e.g. routes/web.php) to
     * publish the demo pages, one per component type, under /blade-ui
     * (e.g. /blade-ui/form):
     *
     *     Molitor\BladeUi\Providers\BladeUiServiceProvider::routes();
     */
    public static function routes(string $prefix = 'blade-ui'): void
    {
        Route::middleware('web')
            ->prefix($prefix)
            ->name('blade-ui.showcase.')
            ->group(__DIR__.'/../../routes/web.php');
    }
}
