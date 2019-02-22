<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'name' => $faker->streetName,
        'description' => $faker->text(100),
    ];
});

$factory->state(App\Category::class, 'test', function(Faker $faker) {
    return [
        'name' => 'SEO',
        'description' => 'Description for SEO category',
    ];
});

