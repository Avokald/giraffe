<?php

use Faker\Generator as Faker;

$factory->define(App\MenuElement::class, function (Faker $faker) {
    return [
        'title' => '',
        'url' => '',
        'parent_element_id' => 0,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-services', function(Faker $faker) {
    return [
        'title' => 'Каталог сервисов',
        'url' => route('services.index'),
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-services-filtered', function(Faker $faker) {
    return [
        'title' => 'Недавние',
        'url' => route('services.index'),
        'menu_id' => 1,
        'parent_element_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-compilations', function(Faker $faker) {
    return [
        'title' => 'Подборки',
        'url' => route('compilations.index'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-blog', function(Faker $faker) {
    return [
        'title' => 'Блог',
        'url' => route('blogposts.index'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-about', function(Faker $faker) {
    return [
        'title' => 'О нас',
        'url' => route('about'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-services', function(Faker $faker) {
    return [
        'title' => 'Каталог сервисов',
        'url' => route('services.index'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-compilations', function(Faker $faker) {
    return [
        'title' => 'Подборки',
        'url' => route('services.index'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-blog', function(Faker $faker) {
    return [
        'title' => 'Блог',
        'url' => route('blogposts.index'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-about', function(Faker $faker) {
    return [
        'title' => 'О нас',
        'url' => route('about'),
        'menu_id' => 2,
        'type_id' => 0,
    ];
});



//$factory->state(App\MenuElement::class, 'setup-header', function(Faker $faker) {
//    return [
//        'title' => '',
//        'url' => '',
//        'menu_id' => 0,
//        'type_id' => 0,
//    ];
//});







