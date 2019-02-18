<?php

use Faker\Generator as Faker;

$factory->define(App\PageElement::class, function (Faker $faker) {
    return [
        //
    ];
});


$factory->state(App\PageElement::class, 'about-video-button-text', function(Faker $faker) {
    return [
        'name' => 'about_video_button_text',
        'values' => [],
        'page_id' => 2,
        'hidden' => true,
        'page_element_type_id' => 1,
    ];
});


$factory->state(App\PageElement::class, 'about-video-button-link', function(Faker $faker) {
    return [
        'name' => 'about_video_button_link',
        'values' => [],
        'page_id' => 2,
        'hidden' => true,
        'page_element_type_id' => 1,
    ];
});

$factory->state(App\PageElement::class, 'about-video-button', function(Faker $faker) {
    return [
        'name' => 'video_button',
        'values' => [
            'text' => 5,
            'link' => 6,
        ],
        'page_id' => 2,
        'page_element_type_id' => \App\PageElementType::where('name', '=', 'multifield')->first()->id,
    ];
});

$factory->state(App\PageElement::class, 'about-block-with-aside-image-text', function(Faker $faker) {
    return [
        'name' => 'block_with_image_on_side_text',
        'values' => ['<h1>hello</h1>',],
        'page_id' => 2,
        'page_element_type_id' => \App\PageElementType::where('name', '=', 'editor')->first()->id,
    ];
});

$factory->state(App\PageElement::class, 'about-block-with-aside-image-image', function(Faker $faker) {
    return [
        'name' => 'block_with_image_on_side_image',
        'values' => [],
        'page_id' => 2,
        'page_element_type_id' => \App\PageElementType::where('name', '=', 'image')->first()->id,
    ];
});

$factory->state(App\PageElement::class, 'about-block-with-aside-image-multifield', function(Faker $faker) {
    return [
        'name' => 'block_with_image_on_side',
        'values' => [
            'block_with_image_on_side_text' => 0,
            'block_with_image_on_side_image' => 0,
        ],
        'page_id' => 2,
        'page_element_type_id' => \App\PageElementType::where('name', '=', 'multifield')->first()->id,
    ];
});


$factory->state(App\PageElement::class, 'about-block-with-aside-image', function(Faker $faker) {
    return [
        'name' => 'block_with_image_on_side',
        'values' => [],
        'page_id' => 2,
        'page_element_type_id' => \App\PageElementType::where('name', '=', 'repeater')->first()->id,
    ];
});




/*
$factory->state(App\PageElement::class, 'about-apply-button-text', function(Faker $faker) {
    return [
        'name' => 'apply_button_text',
        'values' => [],
        'hidden' => true,
        'page_id' => 2,
        'page_element_type_id' => 1,
    ];
});

$factory->state(App\PageElement::class, 'about-apply-button-link', function(Faker $faker) {
    return [
        'name' => 'apply_button_link',
        'values' => [],
        'page_id' => 2,
        'page_element_type_id' => 1,
    ];
});

$factory->state(App\PageElement::class, 'about-block-w-aside-1-text', function(Faker $faker) {
    return [
        'name' => 'block_with_aside_1_text',
        'values' => [],
        'page_id' => 2,
        'html_id' => 'block_with_aside_1_text',
        'page_element_type_id' => 2,
    ];
});

$factory->state(App\PageElement::class, 'about-block-w-aside-1-image', function(Faker $faker) {
    return [
        'name' => 'block_with_aside_1_image',
        'values' => [],
        'page_id' => 2,
        'page_element_type_id' => 1,
    ];
});

$factory->state(App\PageElement::class, 'about-block-w-aside-2-text', function(Faker $faker) {
    return [
        'name' => 'block_with_aside_2_text',
        'values' => [],
        'page_id' => 2,
        'html_id' => 'block_with_aside_2_text',
        'page_element_type_id' => 2,
    ];
});


$factory->state(App\PageElement::class, 'about-block-w-aside-2-image', function(Faker $faker) {
    return [
        'name' => 'block_with_aside_2_image',
        'values' => [],
        'page_id' => 2,
        'page_element_type_id' => 1,
    ];
});

$factory->state(App\PageElement::class, 'about-team', function(Faker $faker) {
    return [
        'name' => 'team',
        'values' => [],
        'page_id' => 2,
        'page_element_type_id' => 3,
    ];
});
*/
