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
     * The table associated with the model.
     *
     * @var string
     */
    protected $table;

    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->table = config('checklists.scaffolding.db_name');
    }
}
