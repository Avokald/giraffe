<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
    ];
});

$factory->state(App\Tag::class, 'test', function(Faker $faker) {
    return [
        'name' => 'Test product name',
    ];
});

