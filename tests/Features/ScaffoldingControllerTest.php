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
        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();
    }
}
