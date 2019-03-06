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

        $watchVideoButtonText = Phrase::create([
            'slug' => 'watch-video-button-text',
            'value' => 'Смотреть видео',
        ]);

        $joinUsButtonText= Phrase::create([
            'slug' => 'join-us-button-text',
            'value' => 'Присоединяйтесь К Нам Сегодня',
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
    }
}
