<?php

use Illuminate\Database\Seeder;

class PageElementTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\PageElementType::class, 1)->state('text')->create();
        factory(\App\PageElementType::class, 1)->state('editor')->create();
        factory(\App\PageElementType::class, 1)->state('repeater')->create();
        factory(\App\PageElementType::class, 1)->state('map')->create();
        factory(\App\PageElementType::class, 1)->state('multifield')->create();
        factory(\App\PageElementType::class, 1)->state('image')->create();
        factory(\App\PageElementType::class, 1)->state('file')->create();
    }
}
