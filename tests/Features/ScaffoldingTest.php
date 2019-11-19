<?php

namespace Tests\Features;

use Checklists\Models\Scaffolding;

class ScaffoldingTest extends TestCase {

    public function testIndexPageLoad()
    {
        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();

        $response->assertSee('No available scaffoldings.');
    }

    public function testSingleRecordIndexPage()
    {
        $scaffolding = factory(Scaffolding::class)->create();

        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();

        $response->assertSee($scaffolding->name);
    }

}
