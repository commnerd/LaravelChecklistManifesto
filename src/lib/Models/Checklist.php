<?php

namespace Checklists\Models;

class Checklist extends Scaffolding {
    public function __construct($attributes = array())  {
        parent::__construct($attributes);

        $this->table = config('checklists.checklist.db_table');
    }
}
