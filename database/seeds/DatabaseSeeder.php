<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Service', 1)->state('test')->make();
        factory('App\Service', 10)->create();

        factory(\App\Tariff::class, 3)->state('test')->make();
        factory(\App\Tariff::class, 30)->create();

        factory(\App\Feature::class, 10)->state('test')->make();
        factory(\App\Feature::class, 100)->create();
    }
}
