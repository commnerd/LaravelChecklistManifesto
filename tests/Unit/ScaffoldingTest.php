<?php

namespace Tests\Unit;

use Checklists\Models\Scaffolding;
use Tests\TestCase;

class ScaffoldingTest extends TestCase {

    /**
     * Test the scaffolding factory
     *
     * @return void
     */
    public function testScaffoldingFactory() {
        $scaffolding = factory(Scaffolding::class)->make();

        $this->assertTrue($scaffolding instanceof Scaffolding);
    }
}
