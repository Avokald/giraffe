<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'url' => 'mockimage.markello.info/300/300',
        'name' => 'test.jpg',
        'type' => 'common',
        'alt'  => 'test alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-screenshots', function(Faker $faker) {
    return [
        'url' => 'http://mockimage.markello.info/80/80',
        'name' => 'test-screenshot.jpg',
        'type' => 'screenshot',
        'alt'  => 'test screenshot alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-logo', function(Faker $faker) {
    return [
        'url' => 'http://mockimage.markello.info/250/250',
        'name' => 'test-logo.jpg',
        'type' => 'logo',
        'alt'  => 'test logo alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-banner', function(Faker $faker) {
    return [
        'url' => 'http://mockimage.markello.info/1920/446',
        'name' => 'test-banner.jpg',
        'type' => 'banner',
        'alt'  => 'test banner alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});