<?php

use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        'title' => '',
        'slug' => '',
    ];
});

$factory->state(App\Menu::class, 'setup-header', function(Faker $faker) {
    return [
        'title' => 'Header menu',
        'slug' => 'header-menu',
    ];
});

$factory->state(App\Menu::class, 'setup-footer', function(Faker $faker) {
    return [
        'title' => 'Footer menu',
        'slug' => 'footer-menu',
    ];
});

