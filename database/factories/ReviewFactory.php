<?php

use Faker\Generator as Faker;

$factory->define(App\Review::class, function (Faker $faker) {
    $reviewable = [
        \App\Service::class,
        \App\Review::class,
    ];
    $reviewableType = $faker->randomElement($reviewable);
    $reviewableObjectAll = $reviewableType::all();
    $reviewableObjectId = $reviewableObjectAll->isNotEmpty() ? $reviewableObjectAll->random()->id: 1;

    return [
        'text'            => $faker->text(200),
        'rating'          => $faker->numberBetween(1, 10),
        'reviewable_type' => $reviewableType,
        'reviewable_id'   => $reviewableObjectId,
    ];
});


$factory->state(App\Review::class, 'test', function(Faker $faker) {
    return [
        'text'            => 'Test review text',
        'rating'          => 5,
        'reviewable_type' => \App\Service::class,
        'reviewable_id'   => 1,
    ];
});
