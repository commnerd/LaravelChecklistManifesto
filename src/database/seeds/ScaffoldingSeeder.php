<?php

use Illuminate\Database\Seeder;

use Checklists\Scaffolding;

class ScaffoldingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Scaffolding::class)->save();
    }
}
