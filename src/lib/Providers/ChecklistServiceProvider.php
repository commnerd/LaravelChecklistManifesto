<?php

namespace Checklists\Providers;

use Illuminate\Support\ServiceProvider;
use Checklists\Interfaces\Scaffolding;
use Checklists\Interfaces\Checklist;
use Illuminate\Routing\Router;
use View;

class ChecklistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/checklists.php' => config_path('checklists.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../../../dist/css/checklists.css' => public_path('vendor/css/checklists.css'),
            __DIR__.'/../../../dist/js/checklists.css' => public_path('vendor/js/checklists.js'),
        ], 'public');

        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');
        $this->loadRoutesFrom(__DIR__.'/../../routes/web.php');

        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/checklists.php', 'checklists'
        );

        View::addLocation(__DIR__.'/../../resources/views');

        $this->registerSingletons();

        $this->mapRoutes();
    }

    protected function registerSingletons() {
        $this->app->singleton(Scaffolding::class, function ($app) {
            return new Scaffolding;
        });
        $this->app->singleton(Checklist::class, function ($app) {
            return new Checklist;
        });
    }

    protected function mapRoutes()
    {
        require (__DIR__ . '/../../routes/api.php');
    }
}
