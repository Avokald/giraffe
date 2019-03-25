<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        //
    ];
});
$factory->state(App\Admin::class, 'admin', function(Faker $faker) {
    factory(\App\User::class, 1)->state('admin')->create();
    return [
        'type' => 'admin',
        'user_id' => 1,
    ];
});

$factory->state(App\Admin::class, 'moderator', function(Faker $faker) {
    factory(\App\User::class, 1)->state('user')->create();
    return [
        'type' => 'moderator',
        'user_id' => 2,
    ];
});