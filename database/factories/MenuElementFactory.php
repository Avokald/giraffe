<?php

use Faker\Generator as Faker;

$factory->define(App\MenuElement::class, function (Faker $faker) {
    return [
        'name' => '',
        'url' => '',
        'parent_element_id' => null,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-services', function(Faker $faker) {
    return [
        'name' => 'Каталог',
        'url' => '/categories',
        'menu_id' => 1,
        'parent_element_id' => null,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-services-filtered', function(Faker $faker) {
    return [
        'name' => 'Недавние',
        'url' => '/services',
        'menu_id' => 1,
        'parent_element_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-compilations', function(Faker $faker) {
    return [
        'name' => 'Подборки',
        'url' => '/compilations',
        'parent_element_id' => null,
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-blog', function(Faker $faker) {
    return [
        'name' => 'Блог',
        'url' => '/blog',
        'parent_element_id' => null,
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-header-about', function(Faker $faker) {
    return [
        'name' => 'О нас',
        'url' => '/about',
        'parent_element_id' => null,
        'menu_id' => 1,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-popular', function(Faker $faker) {
    return [
        'name' => 'Популярные категории',
        'url' => '/services',
        'parent_element_id' => null,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-services', function(Faker $faker) {
    return [
        'name' => 'Каталог сервисов',
        'url' => '/services',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-compilations', function(Faker $faker) {
    return [
        'name' => 'Подборки',
        'url' => '/compilations',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-blog', function(Faker $faker) {
    return [
        'name' => 'Блог',
        'url' => '/blog',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});

$factory->state(App\MenuElement::class, 'setup-footer-about', function(Faker $faker) {
    return [
        'name' => 'О нас',
        'url' => '/abour',
        'parent_element_id' => 10,
        'menu_id' => 2,
        'type_id' => 0,
    ];
});


$factory->state(App\MenuElement::class, 'setup-copyright-text', function(Faker $faker) {
    return [
        'name' => '© 2018, SoftBox',
        'url' => null,
        'parent_element_id' => null,
        'menu_id' => 3,
        'type_id' => 0,
    ];
});



//$factory->state(App\MenuElement::class, 'setup-header', function(Faker $faker) {
//    return [
//        'name' => '',
//        'url' => '',
//        'menu_id' => 0,
//        'type_id' => 0,
//    ];
//});







