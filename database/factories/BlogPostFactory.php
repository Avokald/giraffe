<?php

use Faker\Generator as Faker;

$factory->define(App\BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'content' => $faker->text,
        'banner' => 1,
    ];
});

$factory->state(App\BlogPost::class, 'test', function(Faker $faker) {
    return [
        'title' => $faker->streetName,
        'content' => $faker->text,
        'banner' => 1,
        'author_id' => 1,
    ];
});