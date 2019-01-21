<?php

use Faker\Generator as Faker;

$factory->define(App\Tariff::class, function (Faker $faker) {
    $price_month = $faker->numberBetween(500, 100000);
    return [
        'name'        => $faker->streetName,
        'description' => $faker->text(100),
        'price_month' => $price_month,
        'price_year'  => $price_month * 12 - 1000,
        'permissions' => '000',
    ];
});
