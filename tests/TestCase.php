<?php
namespace Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Checklists\Providers\ChecklistServiceProvider;


class TestCase extends OrchestraTestCase
{
    use DatabaseMigrations;

    public function setUp(): void
    {
        parent::setUp();

        $this->withFactories(__DIR__.'/../src/database/factories');

        $this->loadMigrationsFrom(__DIR__ . '/../src/database/migrations');
    }

    protected function getPackageProviders($app)
    {
        return [ChecklistServiceProvider::class];
    }
}
