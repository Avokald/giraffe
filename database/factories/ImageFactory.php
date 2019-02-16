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

$factory->state(App\Image::class, 'service-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/250x250',
        'name' => 'service-logo.jpg',
        'type' => 'service logo',
        'alt'  => 'service logo alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});

$factory->state(App\Image::class, 'service-banner', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/1920x446',
        'name' => 'service-banner.jpg',
        'type' => 'service banner',
        'alt'  => 'service banner alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});

$factory->state(App\Image::class, 'service-screenshot', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/250x250',
        'name' => 'test-screenshot.jpg',
        'type' => 'screenshot',
        'alt'  => 'test service screenshot alt',
        'imageable_type' => \App\Service::class,
        'imageable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});


$factory->state(App\Image::class, 'blog-banner', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/728x417',
        'name' => 'blog-banner.jpg',
        'type' => 'banner',
        'alt'  => 'banner blog alt',
        'imageable_type' => \App\BlogPost::class,
        'imageable_id' => \App\BlogPost::alk()->random()->id,
    ];
});


$factory->state(App\Image::class, 'compilation-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/728x417',
        'name' => 'compilation-logo.jpg',
        'type' => 'logo',
        'alt'  => 'compilation logo alt',
        'imageable_type' => \App\ServiceCompilation::class,
        'imageable_id' => \App\ServiceCompilation::all()->random()->id,
    ];
});

$factory->state(App\Image::class, 'test-compilation-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/728x417',
        'name' => 'test-compilation-logo.jpg',
        'type' => 'logo',
        'alt'  => 'test compilation logo alt',
        'imageable_type' => \App\ServiceCompilation::class,
        'imageable_id' => 1,
    ];
});

$factory->state(App\Image::class, 'category-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/180x180',
        'name' => 'category-logo.jpg',
        'type' => 'logo',
        'alt'  => 'category logo alt',
        'imageable_type' => \App\Category::class,
        'imageable_id' => \App\Category::all()->random()->id,
    ];
});

$factory->state(App\Image::class, 'test-category-logo', function(Faker $faker) {
    return [
        'url' => 'https://via.placeholder.com/180x180',
        'name' => 'test-category-logo.jpg',
        'type' => 'logo',
        'alt'  => 'test category logo alt',
        'imageable_type' => \App\Category::class,
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
        'imageable_type' => \App\BlogPost::class,
        'imageable_id' => 1,
    ];
});
