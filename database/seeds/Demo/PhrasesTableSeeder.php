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
            'name' => 'Поиск на главной',
            'slug' => 'search-button-text',
            'value' => 'Найти',
        ]);

        $indexAllCategories = Phrase::create([
            'name' => 'Все категории',
            'slug' => 'all-categories',
            'value' => 'Все категории',
        ]);

        $indexSearchPlaceholder = Phrase::create([
            'name' => 'Заполнитель поиска',
            'slug' => 'search-placeholder',
            'value' => 'Поиск...',
        ]);

        $indexButtonSend = Phrase::create([
            'name' => 'Отправить текст',
            'slug' => 'button-send-text',
            'value' => 'Отправить',
        ]);

        $insertEmailPlaceholder = Phrase::create([
            'name' => 'Текст заполнитель для почты',
            'slug' => 'email-placeholder',
            'value' => 'Введите ваш e-mail...',
        ]);
    }
}
