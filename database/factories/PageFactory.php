<?php

use Faker\Generator as Faker;

$factory->define(App\Page::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'content' => $faker->text,
        'template' => 'web.template.about',
    ];
});
