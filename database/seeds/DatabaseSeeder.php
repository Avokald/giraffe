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
        factory(\App\Category::class, 5)->create();

        factory(\App\ServiceCompilation::class, 1)->state('test')->create();
        factory(\App\ServiceCompilation::class, 10)->create();

        factory(\App\Service::class, 1)->state('test')->create();
        factory(\App\Service::class, 50)->create();

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(\App\Service::all()->random()->id);
        }

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(\App\Service::all()->random()->id);
        }

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(\App\Service::all()->random()->id);
        }

        factory(\App\Tariff::class, 3)->state('test')->create();
        factory(\App\Tariff::class, 30)->create();

        factory(\App\Review::class, 3)->state('test')->create();
        factory(\App\Review::class, 50)->create();


        factory(\App\Image::class, 3)->state('category-logo')->create();
        factory(\App\Image::class, 5)->state('compilation-logo')->create();


        factory(\App\Image::class, 1)->state('test-service-logo')->create();
        factory(\App\Image::class, 1)->state('test-service-banner')->create();
        factory(\App\Image::class, 10)->state('test-service-screenshot')->create();

        factory(\App\Material::class, 1)->state('test-pdf')->create();
        factory(\App\Material::class, 1)->state('test-video')->create();
        factory(\App\Material::class, 1)->state('test-document')->create();
        factory(\App\Material::class, 1)->state('test-presentation')->create();

        factory(\App\Admin::class, 1)->state('test-admin')->create();
//        factory(\App\Admin::class, 1)->state('test-moderator')->create();

        factory(\App\User::class, 10)->state('test')->create();

        factory(\App\BlogPost::class, 1)->state('test')->create();
        factory(\App\BlogPost::class, 20)->create();

        factory(\App\Image::class, 1)->state('test-blog-banner')->create();

        factory(\App\Tag::class, 1)->state('test')->create();
        factory(\App\Tag::class, 7)->create();


        foreach (\App\Tag::all() as $tag) {
            $blogpost = \App\BlogPost::all()->random();
            $tag->blogposts()->attach($blogpost->id);
        }

        foreach (\App\Tag::all() as $tag) {
            $blogpost = \App\BlogPost::all()->random();
            $tag->blogposts()->attach($blogpost->id);
        }

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

        factory(\App\PageElement::class, 1)->state('contacts-phone-numbers')->create();
        factory(\App\PageElement::class, 1)->state('contacts-addresses')->create();
        factory(\App\PageElement::class, 1)->state('contacts-email-addresses')->create();
        factory(\App\PageElement::class, 1)->state('contacts-map')->create();

        factory(\App\PageElement::class, 1)->state('about-video-button-text')->create();
        factory(\App\PageElement::class, 1)->state('about-video-button-link')->create();
        factory(\App\PageElement::class, 1)->state('about-video-button')->create();

        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image-text')->create();
        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image-image')->create();
        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image-multifield')->create();

//      TODO Make it as a repeater
        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image-text')->create();
        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image-image')->create();
        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image-multifield')->create();

//        factory(\App\PageElement::class, 1)->state('about-block-with-aside-image')->create();


//        factory(\App\PageElement::class, 1)->state('about-video-button-link')->create();
//        factory(\App\PageElement::class, 1)->state('about-apply-button-text')->create();
//        factory(\App\PageElement::class, 1)->state('about-apply-button-link')->create();
//        factory(\App\PageElement::class, 1)->state('about-block-w-aside-1-text')->create();
//        factory(\App\PageElement::class, 1)->state('about-block-w-aside-1-image')->create();
//        factory(\App\PageElement::class, 1)->state('about-block-w-aside-2-text')->create();
//        factory(\App\PageElement::class, 1)->state('about-block-w-aside-2-image')->create();

    }
}