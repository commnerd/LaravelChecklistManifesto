<?php

use Checklists\Models\Scaffolding;
use Checklists\Models\Checklist;

return [
    'scaffolding' => [
        'model' => env('CHECKLISTS_SCAFFOLDING', Scaffolding::class),
    ],
    'checklist' => [
        'model' => env('CHECKLISTS_CHECKLIST', Checklist::class),
    ],
];
