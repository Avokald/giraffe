<?php

use Faker\Generator as Faker;

$factory->define(App\Feature::class, function (Faker $faker) {
    return [
        'name'       => $faker->streetName,
        'service_id' => \App\Service::all()->random(),
    ];
});

$factory->state(App\Feature::class, 'test', function(Faker $faker) {
    return [
        'name'       => 'Test service feature name',
        'service_id' => 1,
    ];
});
