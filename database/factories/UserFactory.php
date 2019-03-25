<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'surname' => $faker->lastName,
        'middle_name' => $faker->lastName,
        'phone_number' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'email_verified_at' => now(),
        'birthday' => $faker->date('Y-m-d'),
        'has_site' => $faker->boolean,
        'site_url' => $faker->url,
        'password' => \Illuminate\Support\Facades\Hash::make($faker->password),
        'user_role_id' => 1,
        'remember_token' => str_random(10),
    ];
});

$factory->state(App\User::class, 'user', function(Faker $faker) {
    return [
        'name' => 'Test user',
        'password' => \Illuminate\Support\Facades\Hash::make('1234'),
    ];
});

$factory->state(App\User::class, 'admin', function(Faker $faker) {
    return [
        'name' => 'Administrator',
        'email' => 'a@a.a',
        'password' => \Illuminate\Support\Facades\Hash::make('1'),
        'user_role_id' => 2,
    ];
});