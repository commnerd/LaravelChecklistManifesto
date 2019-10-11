<?php

namespace Checklists\Http\Controllers\Api\V1;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\JsonResponse;
use Checklists\Models\Checklist;
use Illuminate\Http\Request;

class Controller extends BaseController {

    const PAGE_COUNT = 15;
}
