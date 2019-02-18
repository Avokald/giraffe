<?php

use Faker\Generator as Faker;

$factory->define(App\MenuElement::class, function (Faker $faker) {
    return [
        'title' => '',
        'url' => '',
        'parent_element_id' => null,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-services', function(Faker $faker) {
    return [
        'title' => 'Каталог сервисов',
        'url' => '/services',
        'menu_id' => 1,
        'parent_element_id' => null,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-services-filtered', function(Faker $faker) {
    return [
        'title' => 'Недавние',
        'url' => '/services',
        'menu_id' => 1,
        'parent_element_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-compilations', function(Faker $faker) {
    return [
        'title' => 'Подборки',
        'url' => '/compilations',
        'parent_element_id' => null,
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-blog', function(Faker $faker) {
    return [
        'title' => 'Блог',
        'url' => '/blog',
        'parent_element_id' => null,
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-about', function(Faker $faker) {
    return [
        'title' => 'О нас',
        'url' => '/about',
        'parent_element_id' => null,
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-popular', function(Faker $faker) {
    return [
        'title' => 'Популярные категории',
        'url' => '/services',
        'parent_element_id' => null,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-services', function(Faker $faker) {
    return [
        'title' => 'Каталог сервисов',
        'url' => '/services',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-compilations', function(Faker $faker) {
    return [
        'title' => 'Подборки',
        'url' => '/compilations',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-blog', function(Faker $faker) {
    return [
        'title' => 'Блог',
        'url' => '/blog',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-about', function(Faker $faker) {
    return [
        'title' => 'О нас',
        'url' => '/abour',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});


$factory->state(App\MenuElement::class, 'setup-copyright-text', function(Faker $faker) {
    return [
        'title' => '© 2018, SoftBox',
        'url' => null,
        'parent_element_id' => null,
        'menu_id' => 3,
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







