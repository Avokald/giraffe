<?php

use Faker\Generator as Faker;

$factory->define(App\Menu::class, function (Faker $faker) {
    return [
        'name' => '',
        'slug' => '',
    ];
});

$factory->state(App\Menu::class, 'setup-header', function(Faker $faker) {
    return [
        'name' => 'Header menu',
        'slug' => 'header-menu',
    ];
});

$factory->state(App\Menu::class, 'setup-footer', function(Faker $faker) {
    return [
        'name' => 'Footer menu',
        'slug' => 'footer-menu',
    ];
});

$factory->state(App\Menu::class, 'setup-copyright', function(Faker $faker) {
    return [
        'name' => 'Copyright menu',
        'slug' => 'copyright-menu',
    ];
});

