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

    /**
     * A basic vue initialization test
     *
     * @return void
     */
    public function testChecklistsChecklistVueDisplay()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(new ChecklistsPage);
            $response->assertVisible('input[type="checkbox"]');
            $response->assertVisible('input[type="text"]');
        });
    }

    /**
     * A basic checkbox test
     *
     * @return void
     */
    public function testCheckboxUpdate()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(new ChecklistsPage)
                ->assertVisible('.line-item:first-of-type')
                ->click('.line-item:first-of-type input[type="checkbox"]')
                ->assertVue('checked', true, '.line-item:first-of-type');
        });
    }

    /**
     * A basic line item update test
     *
     * @return void
     */
    public function testLineItemUpdate()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(new ChecklistsPage)
                ->assertVisible('.line-item:first-of-type')
                ->keys('.line-item:first-of-type input[type="text"]', 'foo')
                ->assertVue('line', 'foo', '.line-item:first-of-type');
        });
    }

    /**
     * A basic line item addition test
     *
     * @return void
     */
    public function testNewLineItemOnLastLineItemUpdate()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(new ChecklistsPage)
                ->assertVisible('.line-item:first-of-type')
                ->keys('.line-item:first-of-type input[type="text"]', 'foo')
                ->assertVue('line', 'foo', '.line-item:first-of-type')
                ->assertVue('line', '', '.line-item:last-of-type');

        });
    }

    /**
     * A basic second line item addition test
     *
     * @return void
     */
    public function testSecondNewLineItemOnLastLineItemUpdate()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(new ChecklistsPage)
                ->assertVisible('.line-item:first-of-type')
                ->keys('.line-item:first-of-type input[type="text"]', 'foo')
                ->keys('.line-item:nth-of-type(2) input[type="text"]', 'bar')
                ->assertVue('line', 'bar', '.line-item:nth-of-type(2)')
                ->assertVue('line', '', '.line-item:last-of-type');
        });
    }

    /**
     * A basic line item removal test
     *
     * @return void
     */
    public function testLineItemRemoval()
    {
        $this->browse(function (Browser $browser) {
            $response = $browser->visit(new ChecklistsPage)
                ->assertVisible('.line-item:first-of-type')
                ->keys('.line-item:first-of-type input[type="text"]', 'foo')
                ->assertVue('line', '', '.line-item:last-of-type')
                ->keys('.line-item:nth-of-type(2) input[type="text"]', 'bar')
                ->assertVue('line', 'bar', '.line-item:nth-of-type(2)')
                ->assertVue('line', '', '.line-item:last-of-type')
                ->keys('.line-item:first-of-type input[type="text"]', ["{backspace}","{backspace}","{backspace}"]);
        });
    }
}
