<?php

use \App\MenuElement;
use Illuminate\Database\Seeder;

class MenuElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\MenuElement::class, 1)->state('setup-header-services')->create();
        factory(\App\MenuElement::class, 5)->state('setup-header-services-filtered')->create();
        factory(\App\MenuElement::class, 1)->state('setup-header-compilations')->create();
        factory(\App\MenuElement::class, 1)->state('setup-header-blog')->create();
        factory(\App\MenuElement::class, 1)->state('setup-header-about')->create();
        factory(\App\MenuElement::class, 1)->state('setup-footer-popular')->create();
        factory(\App\MenuElement::class, 1)->state('setup-footer-services')->create();
        factory(\App\MenuElement::class, 1)->state('setup-footer-compilations')->create();
        factory(\App\MenuElement::class, 1)->state('setup-footer-blog')->create();
        factory(\App\MenuElement::class, 1)->state('setup-footer-about')->create();
        factory(\App\MenuElement::class, 1)->state('setup-copyright-text')->create();

    }
}
