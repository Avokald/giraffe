<?php

use Faker\Generator as Faker;

$factory->define(App\Material::class, function (Faker $faker) {
    return [
        //
    ];
});

$factory->state(App\Material::class, 'test-pdf', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.pdf',
        'name' => 'test-pdf.pdf',
        'type' => 'pdf',
        'materiable_type' => \App\Service::class,
        'materiable_id' => 1,
    ];
});

$factory->state(App\Material::class, 'test-presentation', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.pptx',
        'name' => 'test-pdf.pptx',
        'type' => 'presentation',
        'materiable_type' => \App\Service::class,
        'materiable_id' => 1,
    ];
});

$factory->state(App\Material::class, 'test-document', function(Faker $faker) {
    return [
        'url' => 'http://example.com/example.doc',
        'name' => 'test-doc.doc',
        'type' => 'document',
        'materiable_type' => \App\Service::class,
        'materiable_id' => 1,
    ];
});