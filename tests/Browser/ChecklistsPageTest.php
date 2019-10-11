<?php

namespace Tests\Browser;

use Tests\Browser\Pages\Checklists as ChecklistsPage;
use Laravel\Dusk\Browser;
use App\Models\User;

class ChecklistsPageTest extends TestCase
{
    /**
     * A basic home page load test
     *
     * @return void
     */
    public function testChecklistsPageDisplay()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(new ChecklistsPage);
        });
    }
}
