<?php

namespace Checklists\Providers;

use Illuminate\Support\ServiceProvider;
use Checklists\Models\Scaffolding;
use Checklists\Models\Checklist;

class ChecklistServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Scaffolding::class, function ($app) {
            return new Scaffolding(config('checklists.scaffolding'));
        });
        $this->app->singleton(Checklist::class, function ($app) {
            return new Checklist(config('checklists.checklist'));
        });
    }
}
