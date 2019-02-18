<?php

use App\Page;
use Illuminate\Database\Seeder;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indexPage = Page::create([
            'name' => 'Главная',
            'content' => '<h2>ывыфыв</h2>',
            'template' => 'web.templates.index',
        ]);

        $contactsPage = Page::create([
            'name' => 'Contacts',
            'content' => 'For the glory',
            'template' => 'web.template.contacts',
        ]);

        $aboutPage = Page::create([
            'name' => 'About',
            'content' => 'You will pay for this',
            'template' => 'web.template.about',
        ]);

        $error404Page = Page::create([
            'name' => '404',
            'content' => '<h2>К сожалению страница не найдена</h2>',
            'template' => 'errors.404',
        ]);
    }
}
