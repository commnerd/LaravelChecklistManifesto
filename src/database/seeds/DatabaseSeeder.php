<?php

use Illuminate\Database\Seeder;
use Checklists\Scaffolding;
use Checklists\Checklist;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ScaffoldingSeeder::class);
        $this->call(ChecklistSeeder::class);
    }
}
