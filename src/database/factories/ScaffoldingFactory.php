<?php

use Faker\Generator as Faker;
use Checklists\Scaffolding;

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

$factory->define(Scaffolding::class, function (Faker $faker) {
    return [
        'type' => $faker->name,
        'line' => $faker->unique()->safeEmail,
    ];
});
