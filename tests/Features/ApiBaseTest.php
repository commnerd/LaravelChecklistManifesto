<?php

namespace Tests\Unit;

use Checklists\Http\Controllers\Controller;
use Checklists\Models\Scaffolding;
use Tests\TestCase;

abstract class ApiBaseTest extends TestCase {

    /**
     * The model class
     *
     * @var string
     */
    protected $model;

    /**
     * The resource short name
     *
     * @var string
     */
    protected $resourceName;

    /**
     * Test the empty index endpoint
     *
     * @return void
     */
    public function testEmptyIndex() {
        $response = $this->get(route("{$this->resourceName}.index"));

        $response->assertSuccessful();
    }

    /**
     * Test index endpoint with element
     *
     * @return void
     */
    public function testIndexWithSingleElement() {
        factory($this->model)->create();

        $response = $this->get(route("{$this->resourceName}.index"));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(1, sizeof($content->data));
    }

    /**
     * Test scaffolding index endpoint with PAGE_COUNT - 1 scaffoldings
     *
     * @return void
     */
    public function testIndexWithSinglePage() {
        factory($this->model, Controller::PAGE_COUNT - 1)->create();

        $response = $this->get(route("{$this->resourceName}.index"));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(Controller::PAGE_COUNT - 1, sizeof($content->data));
    }

    /**
     * Test scaffolding index endpoint with paged scaffoldings
     *
     * @return void
     */
    public function testScaffoldingIndexWithPagedScaffoldings() {
        factory($this->model, Controller::PAGE_COUNT * 2)->create();

        $response = $this->get(route("{$this->resourceName}.index"));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(Controller::PAGE_COUNT, sizeof($content->data));
    }

    /**
     * Test scaffolding create endpoint
     *
     * @return void
     */
    public function testScaffoldingCreation() {
        $element = factory($this->model)->make();

        $response = $this->post(route("{$this->resourceName}.store"), $element->toArray());

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(1, $content->id);
    }

}
