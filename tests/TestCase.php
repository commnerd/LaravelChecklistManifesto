<?php
namespace Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Checklists\Providers\ChecklistServiceProvider;


class TestCase extends OrchestraTestCase
{
    use DatabaseMigrations;


    protected function getPackageProviders($app)
    {
        return [ChecklistServiceProvider::class];
    }
}
