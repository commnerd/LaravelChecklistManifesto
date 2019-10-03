<?php

namespace Checklists\Models;

class Checklist extends Scaffolding {

    /**
     * Fillable properties for Scaffolding
     *
     * @var array
     */
    protected $fillable = ['type', 'line'];

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
