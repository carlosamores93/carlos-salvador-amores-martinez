<?php

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(App\Skill::class, function (Faker $faker) {
	$title = $faker->unique()->jobTitle;
    return [
        'title'  => $title,
        'slug' => Str::slug($title),
        'description' => $faker->text,
        'status' => $faker->randomElement([0,1])
    ];
});
