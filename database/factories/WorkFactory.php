<?php

use Faker\Generator as Faker;

$factory->define(App\Work::class, function (Faker $faker) {
	$company = $faker->company;
    return [
        'company' => $company,
        'slug' => Str::slug($company),
        'job' => $faker->jobTitle,
        'status' => $faker->randomElement([0,1]),
        'description' => $faker->text,
        'start_date' => $faker->dateTimeInInterval('-3 years','+60 days'),
        'end_date' => $faker->dateTimeInInterval('-2 years','+60 days'),
    ];
});
