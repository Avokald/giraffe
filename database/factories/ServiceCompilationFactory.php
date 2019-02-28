<?php

use Faker\Generator as Faker;

$factory->define(App\ServiceCompilation::class, function (Faker $faker) {
    return [
        'name'        => $faker->streetName,
        'description' => $faker->text,
        'price_month' => $faker->numberBetween(5000, 20000),
        'price_year'  => $faker->numberBetween(50000, 200000),
        'category_id' => \App\Category::all()->random()->id,
        'hover_title' => $faker->text(30),
        'hover_description' => $faker->text(100),
    ];
});


$factory->state(App\ServiceCompilation::class, 'test', function(Faker $faker) {
    return [
        'name' => 'Compilation name',
        'description' => 'Compilation description',
        'price_month' => 10000,
        'price_year'  => 100000,
        'category_id' => 1,
        'hover_title' => 'Title',
        'hover_description' => 'Description for hover on compilations',

    ];
});