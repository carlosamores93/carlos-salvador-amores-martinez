<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

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

$factory->define(User::class, function (Faker $faker) {
	// https://github.com/fzaninotto/Faker
	// php artisan db:seed
	// database/seeds/DatabaseSeeder.php
	$name = $faker->name;
	$lastname = $faker->lastname;
	$job = $faker->jobTitle;
    return [
        'name' => $name,
        'lastname' => $lastname,
        'email' => Str::slug($name) . '-' . Str::slug($lastname) . '@' . $faker->freeEmailDomain,
        //'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
        'phone' => $faker->numerify('6########'),
        'description' => $faker->text,
        'career' => $job,
        'profession' => $job,
        'university' => $faker->city,
        'faculty' => $faker->jobTitle,
        'address' => $faker->address,
        'github' => 'https://github.com/' . Str::slug($name),
        'gitlab' => 'https://gitlab.com/' . Str::slug($name),
        'linkedin' => 'https://www.linkedin.com/in/' . Str::slug($name),
        'website' => $faker->url,
    ];
});
