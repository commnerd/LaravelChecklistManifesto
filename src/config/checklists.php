<?php

use Checklists\Models\Scaffolding;
use Checklists\Models\Checklist;

return [
    'database' => env('CHECKLISTS_DATABASE', env('DB_DATABASE', 'mysql')),

    'scaffolding' => [
        'model' => env('CHECKLISTS_SCAFFOLDING', Scaffolding::class),
        'db_table' => env('CHECKLISTS_SCAFFOLDING_DB_TABLE', 'checklists_scaffoldings'),
    ],

    'checklist' => [
        'model' => env('CHECKLISTS_CHECKLIST', Checklist::class),
        'db_table' => env('CHECKLISTS_CHECKLIST_DB_TABLE', 'checklists_checklists'),
    ],
];
