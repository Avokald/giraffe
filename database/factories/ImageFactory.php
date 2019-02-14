<?php

use Faker\Generator as Faker;

$factory->define(App\Image::class, function (Faker $faker) {
    return [
        'url' => 'mockimage.markello.info/300/300',
        'name' => $faker->uuid.'.jpg',
        'type' => null,
        'alt'  => null,
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-service-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/250x250',
        'name' => 'test-logo.jpg',
        'type' => 'logo',
        'alt'  => 'test service logo alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-service-banner', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/1920x446',
        'name' => 'test-banner.jpg',
        'type' => 'banner',
        'alt'  => 'test service banner alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-service-screenshot', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/250x250',
        'name' => 'test-screenshot.jpg',
        'type' => 'screenshot',
        'alt'  => 'test service screenshot alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-blog-banner', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/728x417',
        'name' => 'test-blog-banner.jpg',
        'type' => 'banner',
        'alt'  => 'test banner blog alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

