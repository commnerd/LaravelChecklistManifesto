<?php

namespace Checklists\Models;

class Checklist extends Scaffolding {

    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable(): string
    {
        return config('checklists.checklist.db_table');
    }
}
