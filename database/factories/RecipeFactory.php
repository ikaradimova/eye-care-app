<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Recipe::class, function (Faker $faker) {
    return [
        'title' => $faker->text(25),
        'preptime' => $faker->numberBetween(1, 120) . ' минути',
        'description' => $faker->paragraph,
        'ingredients' => $faker->paragraph,
        'preparation' => $faker->paragraph,
        'cover' => $faker->imageUrl(400, 240)
    ];
});
