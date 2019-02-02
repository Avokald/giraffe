<?php

use Faker\Generator as Faker;

$factory->define(App\PageElementType::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->state(App\PageElementType::class, 'test-text', function(Faker $faker) {
    return [
        'name' => 'text',
        'page_id' => 1,
    ];
});

$factory->state(App\PageElementType::class, 'test-phone', function(Faker $faker) {
    return [
        'name' => 'phone_number',
        'page_id' => 1,
    ];
});


