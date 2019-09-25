<?php

namespace Tests\Unit;

use Checklists\Models\Checklist;
use Tests\TestCase;

class ChecklistTest extends TestCase {

    /**
     * Test the checklist factory
     *
     * @return void
     */
    public function testChecklistFactory() {
        $checklist = factory(Checklist::class)->make();

        $this->assertTrue($checklist instanceof Checklist);
    }
}
