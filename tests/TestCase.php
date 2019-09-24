<?php
namespace Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;


class TestCase extends OrchestraTestCase
{
    use DatabaseMigrations;
    
    protected function getPackageProviders($app)
    {
        return ['Checklists\ChecklistServiceProvider'];
    }
}
