<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->text,
        'template' => 'web.template.about',
    ];
});


$factory->state(App\Page::class, 'contacts', function(Faker $faker) {
    return [
        'title' => 'Contacts',
        'content' => 'For the glory',
        'template' => 'web.template.contacts',
    ];
});

$factory->state(App\Page::class, 'about', function(Faker $faker) {
    return [
        'title' => 'About',
        'content' => 'You will pay for this',
        'template' => 'web.template.about',
    ];
});

$factory->state(App\Page::class, 'faq', function(Faker $faker) {
    return [
        'title' => 'FAQ',
        'content' => 'Hoping to the thought of another time',
        'template' => 'web.template.faq',
    ];
});

$factory->state(App\Page::class, '404', function(Faker $faker) {
    return [
        'title' => '404',
        'content' => '<h2>К сожалению страница не найдена</h2>',
        'template' => 'errors.404',
    ];
});

$factory->state(App\Page::class, 'index', function(Faker $faker) {
    return [
        'title' => 'Главная',
        'content' => '<h2>ывыфыв</h2>',
        'template' => 'web.templates.index',
    ];
});
