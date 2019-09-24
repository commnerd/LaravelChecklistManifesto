<?php

namespace Tests\Unit;

use Checklists\Checklist;
use Tests\TestCase;

class ChecklistTest extends TestCase {

    /**
     * Test the checklist factory
     *
     * @return void
     */
    public function testChecklistFactory() {
        $checklist = factory(Checklist::class);

        $this->assertTrue($checklist instanceof Checklist);
    }
}
