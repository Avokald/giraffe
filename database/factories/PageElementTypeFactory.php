<?php

use Faker\Generator as Faker;

$factory->define(App\PageElementType::class, function (Faker $faker) {
    return [
        // TODO
    ];
});

$factory->state(App\PageElementType::class, 'text', function(Faker $faker) {
    return [
        'name' => 'text',
        'template' => 'admin.partials.text',
    ];
});

$factory->state(App\PageElementType::class, 'editor', function(Faker $faker) {
    return [
        'name' => 'editor',
        'template' => 'admin.partials.editor',
    ];
});

$factory->state(App\PageElementType::class, 'repeater', function(Faker $faker) {
    return [
        'name' => 'repeater',
        'template' => 'admin.partials.repeater',
    ];
});

$factory->state(App\PageElementType::class, 'map', function(Faker $faker) {
    return [
        'name' => 'map',
        'template' => 'admin.partials.map',
    ];
});

$factory->state(App\PageElementType::class, 'multifield', function(Faker $faker) {
    return [
        'name' => 'multifield',
        'template' => 'admin.partials.multifield',
    ];
});

$factory->state(App\PageElementType::class, 'file', function(Faker $faker) {
    return [
        'name' => 'file',
        'template' => 'admin.partials.file',
    ];
});

$factory->state(App\PageElementType::class, 'image', function(Faker $faker) {
    return [
        'name' => 'image',
        'template' => 'admin.partials.image',
    ];
});

