<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\EyeDisease::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'symptoms' => $faker->paragraph,
        'causes' => $faker->paragraph,
        'risk_factors' => $faker->paragraph,
        'complications' => $faker->paragraph,
        'treatment' => $faker->paragraph
    ];
});
