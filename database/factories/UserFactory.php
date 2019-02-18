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
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'email_verified_at' => now(),
        'password' => \Illuminate\Support\Facades\Hash::make($faker->password),
        'remember_token' => str_random(10),
    ];
});

$factory->state(App\User::class, 'test', function(Faker $faker) {
    return [
        'name' => 'Test user',
        'email' => $faker->safeEmail,
        'email_verified_at' => now(),
        'password' => \Illuminate\Support\Facades\Hash::make('1234'),
        'remember_token' => str_random(10),
    ];
});

$factory->state(App\User::class, 'test-admin', function(Faker $faker) {
    return [
        'name' => 'Test user admin',
        'email' => 'test_admin@example.com',
        'email_verified_at' => now(),
        'password' => \Illuminate\Support\Facades\Hash::make('111'),
        'remember_token' => str_random(10),
    ];
});