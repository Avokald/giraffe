<?php

use \App\Page;
use \App\PageElement;
use App\Faq;
use App\FaqCategory;
use \App\PageElementType;
use \App\Menu;
use \App\MenuElement;

use Illuminate\Database\Seeder;

class DemoUnitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InitUnitsSeeder::class);

        $this->call(UsersTableSeeder::class);

        factory(\App\Category::class)->state('test')->create();
        factory(\App\Image::class)->state('category-logo')->create(['imageable_id' => 1]);

        factory(\App\ServiceCompilation::class)->state('test')->create();
        factory(\App\Image::class)->state('compilation-logo')->create(['imageable_id' => 1]);

        // Test service and recommended together service
        $firstService = factory(\App\Service::class)->state('test')->create();

        $secondService = factory(\App\Service::class)->create();
        $firstService->relatedServicesTo()->attach($secondService->id);


        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach($firstService->id);
            $compilation->situations()->attach(\App\ServiceCompilationSituation::all()->random()->id);
        }

        factory(\App\Tariff::class, 3)->state('test')->create(['service_id' => $firstService->id]);

        $this->call(TariffUserTableSeeder::class);

        factory(\App\Review::class, 3)->state('test')->create();

        $this->call(ImagesTableSeeder::class);

        $this->call(MaterialsTableSeeder::class);


        $firstBlog = factory(\App\BlogPost::class)->state('test')->create();

        $testTag = factory(\App\Tag::class)->state('test')->create();
        $testTag->blogposts()->attach($firstBlog->id);


        $faqCategory = FaqCategory::create([
            'name' => 'test faq category 1',
        ]);

        $faq = Faq::create([
            'name' => 'Test FAQ',
            'content' => 'Test FAQ\'s content',
            'faq_category_id' => $faqCategory->id,
        ]);
    }
}
