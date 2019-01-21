<?php

use Faker\Generator as Faker;

$factory->define(App\Tariff::class, function (Faker $faker) {
    $price_month = $faker->numberBetween(500, 100000);
    $service = \App\Service::all()->random();
    return [
        'name'        => $faker->streetName,
        'description' => $faker->text(100),
        'price_month' => $price_month,
        'price_year'  => $price_month * 12 - 1000,
        'permissions' => decbin($faker->numberBetween(0, count($service->features))),
        'service_id'  => $service->id,
    ];
});

$factory->state(App\Tariff::class, 'test', function(Faker $faker) {
    return [
        'name'        => 'Test product tariff',
        'description' => 'Description of test product tariff',
        'price_month' => 1000,
        'price_year'  => 10000,
        'permissions' => 0x001,
        'service_id'  => 1,
    ];
});
