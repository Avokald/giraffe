<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'content' => $faker->text,
        'template' => 'web.pages.template.about',
    ];
});


$factory->state(App\Page::class, 'contacts', function(Faker $faker) {
    return [
        'title' => 'Contacts',
        'content' => '',
        'template' => 'web.pages.template.contacts',
    ];
});
