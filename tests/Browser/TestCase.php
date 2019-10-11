<?php
namespace Tests\Browser;

use Orchestra\Testbench\Dusk\TestCase as OrchestraTestCase;
use \Orchestra\Testbench\Dusk\Options as OrchestraOptions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Checklists\Providers\ChecklistServiceProvider;


class TestCase extends OrchestraTestCase
{
    use DatabaseMigrations;

    protected static $baseServeHost = '127.0.0.1';
    protected static $baseServePort = 9000;

    /**
     * setUp the test harness
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        OrchestraOptions::withUI();

        $this->withFactories(__DIR__.'/../src/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [ChecklistServiceProvider::class];
    }
}
