<?php

use \App\Page;
use \App\PageElement;
use App\Faq;
use App\FaqCategory;
use \App\PageElementType;
use \App\Menu;
use \App\MenuElement;

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
        factory(\App\Service::class, 1)->create();

        \App\Service::find(1)->relatedServicesTo()->attach(\App\Service::find(2));

        $this->call(ServiceCompilationSituationsTableSeeder::class);

        foreach (\App\ServiceCompilation::all() as $compilation) {
            $compilation->services()->attach(1);
            $compilation->situations()->attach(\App\ServiceCompilationSituation::all()->random());

        }

        factory(\App\Tariff::class, 3)->state('test')->create(['service_id' => 1]);

        factory(\App\Review::class, 3)->state('test')->create();

        factory(\App\Image::class, 1)->state('test-category-logo')->create();

        factory(\App\Image::class, 5)->state('test-compilation-logo')->create();


        factory(\App\Material::class, 1)->state('service-pdf')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-document')->create(['materiable_id' => 1]);
        factory(\App\Material::class, 1)->state('service-presentation')->create(['materiable_id' => 1]);

        factory(\App\Admin::class, 1)->state('test-admin')->create();

        factory(\App\User::class, 3)->state('test')->create();

        factory(\App\BlogPost::class, 1)->state('test')->create();

        factory(\App\Tag::class, 1)->state('test')->create();

        \App\Tag::findOrFail(1)->blogposts()->attach(1);


        $faqCategory = FaqCategory::create([
            'name' => 'test faq category 1',
        ]);

        $faq = Faq::create([
            'name' => 'Test FAQ',
            'content' => 'Test FAQ\'s content',
            'faq_category_id' => $faqCategory->id,
        ]);



        $this->call(PagesTableSeeder::class);

        $this->call(PageElementTypesTableSeeder::class);

        $this->call(PageElementsTableSeeder::class);

        $this->call(MenusTableSeeder::class);

        $this->call(MenuElementsTableSeeder::class);

        $this->call(ImagesTableSeeder::class);

        $this->call(SettingsTableSeeder::class);


    }
}
