<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Contact;
use Faker\Generator as Faker;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->name,
        'last_name' =>  $faker->lastname,
        'email' => $faker->unique()->safeEmail,
        'city' => $faker->city,
        'country' => $faker->country,
        'job_title' => $faker->jobTitle,
        'status' => $faker->randomElement([0,1])
    ];
});
