<?php

namespace Tests\Features;

use Checklists\Models\Checklist;

class IndexTest extends TestCase {

    public function testIndexPageLoad() {
        $response = $this->get(route('checklists'));

        $response->assertSuccessful();
    }

}
