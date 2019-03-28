<?php

use \App\Setting;
use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $logo_image = factory(\App\Image::class)->create([
            'url' => asset('images/logo.png'),
        ]);

        $logo = Setting::create([
            'name' => 'Логотип',
            'slug' => 'company-logo',
            'value' => $logo_image->id,
            'page_element_type_id' => 6,
        ]);

        $saleText = Setting::create([
           'name' => 'Текст текущей акции',
           'slug' => 'current-sale-text',
           'value' => '<b>BLACK Friday</b><span>Get 45 tenge off!</span>',
           'page_element_type_id' => 1,
        ]);

        $saleLink = Setting::create([
           'name' => 'Ссылка текущей акции',
           'slug' => 'current-sale-link',
           'value' => '#',
           'page_element_type_id' => 1,
        ]);

        $mainPhoneNumber = Setting::create([
           'name' => 'Основной номер телефона',
           'slug' => 'main-phone-number',
           'value' => '344-755-111111',
           'page_element_type_id' => 1,
        ]);

        $mainEmailAddress = Setting::create([
           'name' => 'Основная электронная почта',
           'slug' => 'main-email-address',
           'value' => 'abc@def.jkl',
           'page_element_type_id' => 1,
        ]);

    }
}
