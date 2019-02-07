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

$factory->state(App\Image::class, 'test-screenshot', function(Faker $faker) {
    return [
        'url' => '/public/images/thumb1.jpg',
        'name' => 'test-screenshot.jpg',
        'type' => 'screenshot',
        'alt'  => 'test screenshot alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/250x250',
        'name' => 'test-logo.jpg',
        'type' => 'logo',
        'alt'  => 'test logo alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-banner', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/1920x446',
        'name' => 'test-banner.jpg',
        'type' => 'banner',
        'alt'  => 'test banner alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'test-materialImage', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/690x400',
        'name' => 'test-materialImage.jpg',
        'type' => 'materialImage',
        'alt'  => 'test materialImage alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => 1,
    ];
});