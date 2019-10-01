<?php

namespace Checklists\Providers;

use Illuminate\Support\ServiceProvider;
use Checklists\Interfaces\Scaffolding;
use Checklists\Interfaces\Checklist;
use Illuminate\Routing\Router;

class ChecklistServiceProvider extends ServiceProvider
{
    protected $namespace = 'Checklists\Http\Controllers';

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/checklists.php' => config_path('checklists.php'),
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
        $this->app->singleton(Scaffolding::class, function ($app) {
            return new Scaffolding;
        });
        $this->app->singleton(Checklist::class, function ($app) {
            return new Checklist;
        });

        $this->mapRoutes($this->app->router);
    }

    protected function mapRoutes(Router $router)
    {
        $router->group(['namespace' => $this->namespace], function($router) {
            require (__DIR__ . '/../../routes/api.php');
        });
    }
}
