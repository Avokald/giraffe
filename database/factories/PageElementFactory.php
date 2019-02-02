<?php

use Faker\Generator as Faker;

$factory->define(App\PageElement::class, function (Faker $faker) {
    return [
        //
    ];
});


$factory->state(App\PageElement::class, 'test-phone', function(Faker $faker) {
    return [
        'name' => 'phone_numbers',
        'values' => ['87777777777', ],
        'page_element_type_id' => 2,
    ];
});

$factory->state(App\PageElement::class, 'test-text', function(Faker $faker) {
    return [
        'name' => 'subtitles',
        'values' => ['some long ass text for text field',],
        'page_element_type_id' => 1,
    ];
});
