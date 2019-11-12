<?php
namespace Tests\Browser;

use Orchestra\Testbench\Dusk\TestCase as OrchestraTestCase;
use \Orchestra\Testbench\Dusk\Options as OrchestraOptions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Checklists\Providers\ChecklistServiceProvider;
use Illuminate\Support\Facades\Artisan;


class TestCase extends OrchestraTestCase
{
    use DatabaseMigrations;

    protected static $baseServeHost = '127.0.0.1';
    protected static $baseServePort = 9000;

    /**
     * Define environment setup.
     *
     * @param  Illuminate\Foundation\Application  $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
    }

    /**
     * setUp the test harness
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();

        OrchestraOptions::withoutUI();

        if(!is_dir(public_path('/vendor'))) {
            mkdir(public_path('/vendor', 0644, true));
        }
        if(!is_dir(public_path('/vendor/css'))) {
            mkdir(public_path('/vendor/css', 0644, true));
        }
        if(!is_dir(public_path('/vendor/js'))) {
            mkdir(public_path('/vendor/js', 0644, true));
        }

        if(!is_link(public_path('/vendor/css/checklists.css'))) {
            symlink(__DIR__.'/../../dist/css/checklists.css', public_path('/vendor/css/checklists.css'));
        }
        if(!is_link(public_path('/vendor/js/checklists.js'))) {
            symlink(__DIR__.'/../../dist/js/checklists.js', public_path('/vendor/js/checklists.js'));

        }

        $this->withFactories(__DIR__.'/../src/database/factories');
    }

    protected function getPackageProviders($app)
    {
        return [ChecklistServiceProvider::class];
    }
}
