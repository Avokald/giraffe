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
        $this->call(TestUnitsSeeder::class);

        factory(\App\Category::class, 5)->create();

        foreach(\App\Category::all() as $category) {
            factory(\App\Image::class, 1)->state('category-logo')->create(['imageable_id' => $category->id]);
        }

        factory(\App\ServiceCompilation::class, 10)->create();

        factory(\App\Service::class, 50)->create();

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(\App\Service::all()->random()->id);
        }

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(\App\Service::all()->random()->id);
        }

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(\App\Service::all()->random()->id);
            factory(\App\Image::class, 1)->state('compilation-logo')->create(['imageable_id' => $compilation->id]);
        }

        factory(\App\Review::class, 50)->create();

        foreach (\App\Service::all()->except(1) as $service) {
            factory(\App\Image::class)->state('service-logo')->create(['imageable_id' => $service->id]);
            factory(\App\Image::class)->state('service-banner')->create(['imageable_id' => $service->id]);
            factory(\App\Image::class, 10)->state('service-screenshot')->create(['imageable_id' => $service->id]);
            factory(\App\Tariff::class, 3)->create(['service_id' => $service->id]);

            factory(\App\Material::class, 1)->state('service-pdf')->create(['materiable_id' => $service->id]);
            factory(\App\Material::class, 1)->state('service-video')->create(['materiable_id' => $service->id]);
            factory(\App\Material::class, 1)->state('service-document')->create(['materiable_id' => $service->id]);
            factory(\App\Material::class, 1)->state('service-presentation')->create(['materiable_id' => $service->id]);
        }


        factory(\App\User::class, 20)->create();


        factory(\App\BlogPost::class, 30)->create();
        foreach (\App\BlogPost::all() as $blogpost) {
            factory(\App\Image::class, 1)->state('test-blog-banner')->create(['imageable_id' => $blogpost->id]);
        }

        factory(\App\Tag::class, 10)->create();

        factory(\App\FaqCategory::class, 4)->create();

        factory(\App\Faq::class, 50)->create();

        foreach (\App\Tag::all() as $tag) {
            $blogpost = \App\BlogPost::all()->random();
            $tag->blogposts()->attach($blogpost->id);
        }

        foreach (\App\BlogPost::all() as $blogpost) {
            $tag = \App\Tag::all()->random();
            $tag->blogposts()->attach($blogpost->id);
        }

    }
}