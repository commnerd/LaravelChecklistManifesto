<?php

namespace Tests\Features;

use Checklists\Models\Checklist;

class ChecklistTest extends TestCase {

    public function testEmptyIndexPage()
    {
        $response = $this->get(route('checklists.index'));

        $response->assertSuccessful();

        $response->assertSee('No available checklists.');
    }

    public function testSingleRecordIndexPage()
    {
        $checklist = factory(Checklist::class)->create();

        $response = $this->get(route('checklists.index'));

        $response->assertSuccessful();

        $response->assertSee($checklist->name);
    }

}
