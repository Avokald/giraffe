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
            'content' => '<h2>SoftBox</h2>
                        <p>Идейные соображения высшего порядка, а также новая модель организационной деятельности
                            позволяет выполнять важные задания <br>
                            по разработке систем массовогоучастия. Значимость этих проблем настолько очевидна, что
                            новая модель организационной деятельности в <br>
                            значительной степени обуславливает создание существенных
                        </p>',
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

        $compilationsPage = Page::create([
            'name' => 'Подборки',
            'slug' => 'compilations',
            'content' => 'Описание подборок',
            'template' => '',
        ]);
    }
}
