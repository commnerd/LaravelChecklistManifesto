<?php

namespace Tests\Unit;

use Checklists\Models\Scaffolding;
use Tests\TestCase;

class ScaffoldingControllerTest extends TestCase {

    /**
     * Test the scaffolding factory
     *
     * @return void
     */
    public function testScaffoldingIndex() {
        $scaffolding = factory(Scaffolding::class)->make();

        $this->assertTrue($scaffolding instanceof Scaffolding);
    }
}
