<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
    ];
});

$factory->state(App\Category::class, 'test', function(Faker $faker) {
    return [
        'name' => 'SEO',
    ];
});

