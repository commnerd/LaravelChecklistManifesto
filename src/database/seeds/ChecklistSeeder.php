<?php

use Illuminate\Database\Seeder;

use Checklists\Checklist;

class ChecklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Checklist::class)->save();
    }
}
