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
        'name' => 'test-pdf.pdf',
        'type' => 'pdf',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});

$factory->state(App\Material::class, 'service-presentation', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.pptx',
        'name' => 'test-pptx.pptx',
        'type' => 'presentation',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});

$factory->state(App\Material::class, 'service-document', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.doc',
        'name' => 'test-doc.doc',
        'type' => 'document',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});

$factory->state(App\Material::class, 'service-video', function(Faker $faker) {
    return [
        'url' => 'https://www.youtube.com/watch?v=yagzOX7VpNs',
        'name' => 'test-video',
        'type' => 'video',
        'materiable_type' => \App\Service::class,
        'materiable_id' => \App\Service::all()->except(0)->random()->id,
    ];
});