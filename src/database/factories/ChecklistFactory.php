<?php

use Faker\Generator as Faker;
use Checklists\Checklist;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Checklist::class, function (Faker $faker) {
    return [
        'scaffolding_id' => Scaffolding::all()->random()->id,
        'type' => $faker->name,
        'line' => $faker->unique()->safeEmail,
    ];
});
