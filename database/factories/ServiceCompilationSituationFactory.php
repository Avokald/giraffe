<?php

use Faker\Generator as Faker;

$factory->define(App\ServiceCompilationSituation::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(4),
    ];
});
