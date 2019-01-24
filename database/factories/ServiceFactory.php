<?php

use Faker\Generator as Faker;

$factory->define(App\Service::class, function (Faker $faker) {
    $features = [];
    for ( $i = 0; $i < $faker->numberBetween(1, 10); $i++ ) {
        $features[] = $faker->streetName;
    }
    return [
        'name'                    => $faker->streetName,
        'description_long'        => $faker->text(500),
        'description_short'       => $faker->text(100),
        'materials_description'   => $faker->text(500),
        'features'                => $features,
        'installation_difficulty' => $faker->numberBetween(1, 10),
    ];
});

$factory->state(App\Service::class, 'test', function(Faker $faker) {
    $features = [];
    for ( $i = 0; $i < 7; $i++ ) {
        $features[] = 'Test service feature name'.$i;
    }
    return [
        'name'                    => 'Test product name',
        'description_long'        => $faker->text(500),
        'description_short'       => $faker->text(100),
        'materials_description'   => $faker->text(500),
        'features'                => $features,
        'installation_difficulty' => 5,
    ];
});