<?php

namespace Tests\Features;

use Checklists\Models\Checklist;

class ChecklistTest extends TestCase {

    public function testIndexPageLoad()
    {
        $response = $this->get(route('checklist.index'));

        $response->assertSuccessful();
    }

}
