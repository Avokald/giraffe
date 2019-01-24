<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name'                    => $faker->streetName,
        'description_long'        => $faker->text(500),
        'description_short'       => $faker->text(100),
        'materials_description'   => $faker->text(500),
        'installation_difficulty' => $faker->numberBetween(1, 10),
    ];
});

$factory->state(App\Service::class, 'test', function(Faker $faker) {
    return [
        'name'                    => 'Test product name',
        'description_long'        => $faker->text(500),
        'description_short'       => $faker->text(100),
        'materials_description'   => $faker->text(500),
        'installation_difficulty' => 5,
    ];
});
