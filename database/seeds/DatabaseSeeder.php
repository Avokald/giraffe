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
        factory(\App\Service::class, 1)->state('test')->create();
//        factory(\App\Service::class, 10)->create();

        factory(\App\Feature::class, 7)->state('test')->create();
//        factory(\App\Feature::class, 100)->create();

        factory(\App\Tariff::class, 3)->state('test')->create();
//        factory(\App\Tariff::class, 30)->create();

        factory(\App\Review::class, 3)->state('test')->create();
//        factory(\App\Review::class, 50)->create();
    }
}
