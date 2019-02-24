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
        'installation_difficulty' => $faker->numberBetween(1, 6),
        'category_id'             => \App\Category::all()->random()->id,
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
        'videos'                  => [
            'https://www.youtube.com/watch?v=yagzOX7VpNs',
            'https://www.youtube.com/watch?v=HEfHFsfGXjs',
        ],
        'installation_difficulty' => 3,
        'category_id'             => 1,
    ];
});
