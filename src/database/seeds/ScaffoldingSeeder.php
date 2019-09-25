<?php

use Illuminate\Database\Seeder;

use Checklists\Models\Scaffolding;

class ScaffoldingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Scaffolding::class)->create();
    }
}
