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
            'slug' => 'frontpage',
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
            'slug' => 'contacts',
            'content' => '<h1>How can we help?</h1>
                          <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats. Lid est laborum dolo rumes fugats untras.</p>',
            'template' => 'web.templates.contacts',
        ]);

        $aboutPage = Page::create([
            'name' => 'About',
            'slug' => 'about',
            'content' => '
                <h1>Добро пожаловать в
                    <span>SoftBox</span>
                </h1>
                <p>
                    Мы помогаем маркетологам создавать продукты
                </p>',
            'template' => 'web.templates.about',
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
