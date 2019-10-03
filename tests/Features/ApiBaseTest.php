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
     * Test index endpoint with PAGE_COUNT - 1 elements
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
     * Test index endpoint with paged multi-page elements
     *
     * @return void
     */
    public function testIndexWithPagedElements() {
        factory($this->model, Controller::PAGE_COUNT * 2)->create();

        $response = $this->get(route("{$this->resourceName}.index"));

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(Controller::PAGE_COUNT, sizeof($content->data));
    }

    /**
     * Test create endpoint
     *
     * @return void
     */
    public function testCreateElement() {
        $element = factory($this->model)->make();

        $response = $this->post(route("{$this->resourceName}.store"), $element->toArray());

        $response->assertSuccessful();

        $content = json_decode($response->getContent());

        $this->assertEquals(1, $content->id);
    }

    /**
     * Test show endpoint
     *
     * @return void
     */
    public function testShowElement() {
        $element = factory($this->model)->create();

        $response = $this->get(route("{$this->resourceName}.show", [$element]));

        $response->assertSuccessful();
    }

    /**
     * Test update endpoint
     *
     * @return void
     */
     public function testUpdateElement() {
         $element = factory($this->model)->create();
         $elementB = factory($this->model)->make()->toArray();

         $response = $this->put(route("{$this->resourceName}.update", [$element]), $elementB);

         $response->assertSuccessful();

         $class = $this->model;
         $elementA = $class::findOrFail($element->id);

         foreach($elementB as $key => $val) {
             $this->assertEquals($val, $elementA->{$key});
         }
     }

}
