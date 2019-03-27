<?php

use \App\Menu;
use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Menu::class, 1)->state('setup-header')->create();
        factory(Menu::class, 1)->state('setup-footer')->create();
        factory(Menu::class, 1)->state('setup-copyright')->create();

    }
}
