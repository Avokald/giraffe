<?php

use Faker\Generator as Faker;

$factory->define(App\Material::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->state(App\Material::class, 'service-pdf', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.pdf',
        'name' => $faker->word.'.pdf',
        'type' => 'pdf',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(1)->random()->id,
    ];
});

$factory->state(App\Material::class, 'service-presentation', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.pptx',
        'name' => $faker->word.'.pptx',
        'type' => 'presentation',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(1)->random()->id,
    ];
});

$factory->state(App\Material::class, 'service-document', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.doc',
        'name' => $faker->word.'.doc',
        'type' => 'document',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(1)->random()->id,
    ];
});

$factory->state(App\Material::class, 'service-video', function(Faker $faker) {
    return [
        'url' => 'https://www.youtube.com/watch?v=yagzOX7VpNs',
        'name' => $faker->word.'video',
        'type' => 'video',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(1)->random()->id,
    ];
});