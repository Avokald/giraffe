<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name'                    => $faker->streetName,
        'pricing_month'           => $faker->numberBetween(100, 5000),
        'pricing_year'            => $faker->numberBetween(5000, 100000),
        'description_long'        => $faker->text(300),
        'description_short'       => $faker->text(100),
        'installation_difficulty' => $faker->numberBetween(1, 10),
    ];
});

$factory->state(App\Service::class, 'test', function(Faker $faker) {
    return [
        'name'                    => 'Test product name',
        'pricing_month'           => 100,
        'pricing_year'            => 1000,
        'description_long'        => $faker->text(300),
        'description_short'       => $faker->text(100),
        'installation_difficulty' => 5,
    ];
});
