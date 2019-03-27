<?php

use Illuminate\Database\Seeder;
use App\Phrase;

class PhrasesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Index
        $indexSearchButtonText = Phrase::create([
            'slug' => 'search-button-text',
            'value' => 'Найти',
        ]);

        $indexAllCategories = Phrase::create([
            'slug' => 'all-categories',
            'value' => 'Все категории',
        ]);

        $indexSearchPlaceholder = Phrase::create([
            'slug' => 'search-placeholder',
            'value' => 'Поиск...',
        ]);

        $indexButtonSend = Phrase::create([
            'slug' => 'button-send-text',
            'value' => 'Отправить',
        ]);

        $insertEmailPlaceholder = Phrase::create([
            'slug' => 'email-placeholder',
            'value' => 'Введите ваш e-mail...',
        ]);

        // About
        $watchVideoButtonText = Phrase::create([
            'slug' => 'watch-video-button-text',
            'value' => 'Смотреть видео',
        ]);

        $joinUsButtonText= Phrase::create([
            'slug' => 'join-us-button-text',
            'value' => 'Присоединяйтесь к нам сегодня',
        ]);


        $namePlaceholder= Phrase::create([
            'slug' => 'name-placeholder',
            'value' => 'Ваше имя',
        ]);

//        $emailPlaceholder= Phrase::create([
//            'slug' => 'email-placeholder',
//            'value' => 'Ваша почта',
//        ]);

        $textareaPlaceholder= Phrase::create([
            'slug' => 'textarea-placeholder',
            'value' => 'Ваше сообщение',
        ]);


        // Compilations
        $servicesIncluded = Phrase::create([
            'slug' => 'services-included',
            'value' => 'Сервисы входящие в подборку',
        ]);


        // Blog
        Phrase::create([
            'slug' => 'subscribe-email-title',
            'value' => 'Подпишитесь на рассылку',
        ]);

        Phrase::create([
            'slug' => 'subscribe-email-button-text',
            'value' => 'Подписаться',
        ]);

        Phrase::create([
            'slug' => 'tags-title',
            'value' => 'Теги',
        ]);

        Phrase::create([
            'slug' => 'blogposts-popular',
            'value' => 'Популярные посты',
        ]);

        Phrase::create([
            'slug' => 'blogposts-latest',
            'value' => 'Последние публикации',
        ]);

        Phrase::create([
            'slug' => 'read-more',
            'value' => 'Прочитайте больше',
        ]);

        Phrase::create([
            'slug' => 'share-text',
            'value' => 'Поделиться',
        ]);


        // Service
        Phrase::create([
            'slug' => 'related-service-title',
            'value' => 'С этим продуктом будет эффективно',
        ]);

        Phrase::create([
            'slug' => 'hook-up',
            'value' => 'Подключить',
        ]);

        Phrase::create([
            'slug' => 'description',
            'value' => 'Описание',
        ]);

        Phrase::create([
            'slug' => 'materials',
            'value' => 'Материалы',
        ]);

        Phrase::create([
            'slug' => 'tariffs',
            'value' => 'Тарифы',
        ]);

        Phrase::create([
            'slug' => 'reviews',
            'value' => 'отзывы',
        ]);




    }
}
