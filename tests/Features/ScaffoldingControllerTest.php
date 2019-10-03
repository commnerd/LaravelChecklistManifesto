<?php

namespace Tests\Unit;

use Checklists\Http\Controllers\ScaffoldingController;
use Checklists\Models\Scaffolding;
use Tests\TestCase;

class ScaffoldingControllerTest extends TestCase {

    /**
     * Test the empty scaffolding index endpoint
     *
     * @return void
     */
    public function testEmptyScaffoldingIndex() {
        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();
    }

    /**
     * Test scaffolding index endpoint with scaffolding
     *
     * @return void
     */
    public function testScaffoldingIndexWithSingleScaffolding() {
        factory(Scaffolding::class)->create();

        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(1, sizeof($content->data));
    }

    /**
     * Test scaffolding index endpoint with PAGE_COUNT - 1 scaffoldings
     *
     * @return void
     */
    public function testScaffoldingIndexWithoutPagedScaffoldings() {
        factory(Scaffolding::class, ScaffoldingController::PAGE_COUNT - 1)->create();

        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(ScaffoldingController::PAGE_COUNT - 1, sizeof($content->data));
    }

    /**
     * Test scaffolding index endpoint with paged scaffoldings
     *
     * @return void
     */
    public function testScaffoldingIndexWithPagedScaffoldings() {
        factory(Scaffolding::class, ScaffoldingController::PAGE_COUNT * 2)->create();

        $response = $this->get(route('scaffolding.index'));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(ScaffoldingController::PAGE_COUNT, sizeof($content->data));
    }

    /**
     * Test scaffolding create endpoint
     *
     * @return void
     */
    public function testScaffoldingCreation() {
        $scaffolding = factory(Scaffolding::class)->make();

        $response = $this->post(route('scaffolding.store'), $scaffolding->toArray());

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(1, $content->id);
    }

}
