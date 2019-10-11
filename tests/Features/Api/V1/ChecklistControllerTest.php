<?php

namespace Tests\Features\Api\V1;

use Checklists\Models\Checklist;

class ChecklistControllerTest extends TestCase {

    protected $model = Checklist::class;

    protected $resourceName = "checklists.api.v1.checklists";

}
