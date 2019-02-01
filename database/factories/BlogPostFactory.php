<?php

use Faker\Generator as Faker;

$factory->define(App\BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'content' => $faker->text,
    ];
});

$factory->state(App\BlogPost::class, 'test', function(Faker $faker) {
    return [
        'title' => $faker->streetName,
        'content' => $faker->text,
        'author_id' => 1,
    ];
});