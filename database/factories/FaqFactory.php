<?php

use Faker\Generator as Faker;

$factory->define(App\Faq::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence,
        'content' => $faker->text,
        'faq_category_id' => \App\FaqCategory::all()->random()->id,
    ];
});
