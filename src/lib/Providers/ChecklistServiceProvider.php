<?php

namespace Checklists\Providers;

use Illuminate\Support\ServiceProvider;
use Checklists\Interfaces\Scaffolding;
use Checklists\Interfaces\Checklist;
use Illuminate\Routing\Router;

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
        ]);

        $this->loadRoutesFrom(__DIR__.'/../../routes/api.php');

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
        $this->app->singleton(Scaffolding::class, function ($app) {
            return new Scaffolding;
        });
        $this->app->singleton(Checklist::class, function ($app) {
            return new Checklist;
        });
        $this->mapRoutes();
    }

    protected function mapRoutes()
    {
        require (__DIR__ . '/../../routes/api.php');
    }
}
