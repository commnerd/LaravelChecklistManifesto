<?php

namespace Checklists\Providers;

use Illuminate\Support\ServiceProvider;
use Checklists\Interfaces\Scaffolding;
use Checklists\Interfaces\Checklist;

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
    }
}
