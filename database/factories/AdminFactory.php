<?php

use Faker\Generator as Faker;

$factory->define(App\Admin::class, function (Faker $faker) {
    return [
        //
    ];
});
$factory->state(App\Admin::class, 'test-admin', function(Faker $faker) {
    factory(\App\User::class, 1)->state('test-admin')->create();
    return [
        'type' => 'admin',
        'user_id' => 1,
    ];
});

$factory->state(App\Admin::class, 'test-moderator', function(Faker $faker) {
    factory(\App\User::class, 1)->state('test-admin')->create();
    return [
        'type' => 'moderator',
        'user_id' => 2,
    ];
});