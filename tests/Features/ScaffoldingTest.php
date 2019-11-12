<?php

namespace Tests\Features;

use Checklists\Models\Checklist;

class ScaffoldingTest extends TestCase {

    public function testIndexPageLoad()
    {
        $response = $this->get(route('scaffolding.index'));
        // dd($response);

        $response->assertSuccessful();
    }

}
