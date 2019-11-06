<?php

use Faker\Generator as Faker;

$factory->define(App\MiniSkill::class, function (Faker $faker) {
    return [
        'title' => $faker->unique()->jobTitle,
        'progress' => $faker->numberBetween(0,100), 
        'status' => $faker->randomElement([0,1])
    ];
});
