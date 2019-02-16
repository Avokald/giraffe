<?php

use Illuminate\Database\Seeder;

class TestUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Category::class, 1)->state('test')->create();

        factory(\App\ServiceCompilation::class, 1)->state('test')->create();

        factory(\App\Service::class, 1)->state('test')->create();

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(1);
        }

        factory(\App\Tariff::class, 3)->state('test')->create();

        factory(\App\Review::class, 3)->state('test')->create();

        factory(\App\Image::class, 1)->state('test-category-logo')->create();

        factory(\App\Image::class, 5)->state('test-compilation-logo')->create();

        factory(\App\Image::class, 1)->state('service-logo')->create(['imageable_id' => 1]);
        factory(\App\Image::class, 1)->state('service-banner')->create(['imageable_id' => 1]);
        factory(\App\Image::class, 10)->state('service-screenshot')->create(['imageable_id' => 1]);

        factory(\App\Material::class, 1)->state('service-pdf')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-video')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-document')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-presentation')->create(['materiable_id' => 1]);

        factory(\App\Admin::class, 1)->state('test-admin')->create();

        factory(\App\User::class, 10)->state('test')->create();

        factory(\App\BlogPost::class, 1)->state('test')->create();

        factory(\App\Image::class, 1)->state('test-blog-banner')->create();

        factory(\App\Tag::class, 1)->state('test')->create();

        \App\Tag::findOrFail(1)->blogposts()->attach(1);

        factory(\App\Page::class, 1)->state('contacts')->create();
        factory(\App\Page::class, 1)->state('about')->create();
        factory(\App\Page::class, 1)->state('index')->create();
        factory(\App\Page::class, 1)->state('faq')->create();
        factory(\App\Page::class, 1)->state('404')->create();

        factory(\App\PageElementType::class, 1)->state('text')->create();
        factory(\App\PageElementType::class, 1)->state('editor')->create();
        factory(\App\PageElementType::class, 1)->state('repeater')->create();
        factory(\App\PageElementType::class, 1)->state('map')->create();
        factory(\App\PageElementType::class, 1)->state('multifield')->create();
        factory(\App\PageElementType::class, 1)->state('image')->create();
        factory(\App\PageElementType::class, 1)->state('file')->create();

    }
}
