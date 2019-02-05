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
        factory(\App\Category::class, 1)->state('test')->create();
//        factory(\App\Category::class, 5)->create();

        factory(\App\ServiceCompilation::class, 1)->state('test')->create();
//        factory(\App\ServiceCompilation::class, 10)->create();

        factory(\App\Service::class, 1)->state('test')->create();
//        factory(\App\Service::class, 10)->create();

        foreach ( \App\ServiceCompilation::all() as $compilation ) {
            $compilation->services()->attach( \App\Service::all()->random()->id );
        }

        factory(\App\Tariff::class, 3)->state('test')->create();
//        factory(\App\Tariff::class, 30)->create();

        factory(\App\Review::class, 3)->state('test')->create();
//        factory(\App\Review::class, 50)->create();

        factory(\App\Image::class, 1)->state('test-logo')->create();
        factory(\App\Image::class, 1)->state('test-banner')->create();
        factory(\App\Image::class, 10)->state('test-screenshot')->create();
        factory(\App\Image::class, 3)->state('test-materialImage')->create();

        factory(\App\Material::class, 1)->state('test-pdf')->create();
        factory(\App\Material::class, 1)->state('test-video')->create();
        factory(\App\Material::class, 1)->state('test-document')->create();
        factory(\App\Material::class, 1)->state('test-presentation')->create();

        factory(\App\Admin::class, 1)->state('test-admin')->create();
//        factory(\App\Admin::class, 1)->state('test-moderator')->create();

        factory(\App\User::class, 10)->state('test')->create();


        factory(\App\BlogPost::class, 5)->state('test')->create();

        factory(\App\Tag::class, 5)->state('test')->create();

        foreach ( \App\Tag::all() as $tag ) {
            $blogpost = \App\BlogPost::all()->random();
            $tag->blogposts()->attach($blogpost->id);
        }

        foreach ( \App\Tag::all() as $tag ) {
            $blogpost = \App\BlogPost::all()->random();
            $tag->blogposts()->attach($blogpost->id);
        }


    }
}
