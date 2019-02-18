<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Image::class, 1)->state('service-logo')->create(['imageable_id' => 1]);
        factory(\App\Image::class, 1)->state('service-banner')->create(['imageable_id' => 1]);
        factory(\App\Image::class, 10)->state('service-screenshot')->create(['imageable_id' => 1]);


    }
}
