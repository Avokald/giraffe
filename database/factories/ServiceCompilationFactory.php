<?php

use Faker\Generator as Faker;

$factory->define(App\ServiceCompilation::class, function (Faker $faker) {
    return [
        'name'        => $faker->streetName,
        'description' => $faker->text,
        'price_month' => $faker->numberBetween(5000, 20000),
        'price_year'  => $faker->numberBetween(50000, 200000),
        'category_id' => \App\Category::all()->random()->id,
        'hover_title' => $faker->text(30),
        'hover_description' => $faker->text(100),
    ];
});


$factory->state(App\ServiceCompilation::class, 'test', function(Faker $faker) {
    return [
        'name' => 'Compilation name',
        'description' => '<p>Идейные соображения высшего порядка, а также новая модель организационной деятельности позволяет выполнять важные задания по разработке систем массовогоучастия. Значимость этих проблем настолько очевидна, что новая модель организационной деятельности в значительной степени обуславливает создание существенных
<ol>
    <li>Six different themes for product slider</li>
    <li>Featured products slider form selected categories.</li>
    <li>Product slider form specific categories of products. Include or exclude categories.</li>
    <li>Product slider form specific tags of products. Include or exclude tags. New</li>
</ol>
При использовании данной подборки вы экономите 20% от стоимости данных продуктов по одиночке.',
        'price_month' => 10000,
        'price_year'  => 100000,
        'category_id' => 1,
        'hover_title' => 'Title',
        'hover_description' => 'Description for hover on compilations',

    ];
});