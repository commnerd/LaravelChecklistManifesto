<?php

namespace Checklists\Models;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model {
    public function __construct($attributes = array())  {
        parent::__construct($attributes);

        $this->table = config('checklists.checklist.db_table');
    }
}
