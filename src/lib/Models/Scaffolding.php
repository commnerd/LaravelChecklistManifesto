<?php

namespace Checklists\Models;

use Illuminate\Database\Eloquent\Model;

class Scaffolding extends Model {
    /**
     * Type note constant
     *
     * @var string
     */
    const TYPE_NOTE   = "Note";

    /**
     * Type check constant
     *
     * @var string
     */
    const TYPE_CHECK  = "Check";

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
        return config('checklists.scaffolding.db_table');
    }

}
