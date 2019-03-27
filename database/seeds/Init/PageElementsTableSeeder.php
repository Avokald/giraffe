<?php

use App\PageElement;
use Illuminate\Database\Seeder;

class PageElementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Index
        $heading = PageElement::create([
            'name' => 'heading',
            'values' => 'Увеличим Ваши продажи с помощью внедрения <br> "AmoCRM" и CRM системы "Битрикс 24"',
            'page_id' => 1,
            'page_element_type_id' => 2,
        ]);

        $banner = PageElement::create([
            'name' => 'banner',
            'values' => '1',
            'page_id' => 1,
            'page_element_type_id' => 6,
        ]);

        $emailSubscribe = PageElement::create([
            'name' => 'email-subscribe',
            'values' => '<p>Подписывайтесь на наши новости и обновления</p>',
            'page_id' => 1,
            'page_element_type_id' => 2,
        ]);


        $headingCompilations = PageElement::create([
            'name' => 'heading_compilations',
            'values' => '<h2>Наши подборки для развития Вашего бизнеса</h2>',
            'page_id' => 1,
            'page_element_type_id' => 2,
        ]);

        $headingServices = PageElement::create([
            'name' => 'heading_services',
            'values' => '<h2>Наиболее популярные сервисы</h2>',
            'page_id' => 1,
            'page_element_type_id' => 2,
        ]);














        // Contacts
        $leaveYourMessage = PageElement::create([
            'name' => 'leave-your-message',
            'values' => 'Оставьте ваше сообщение',
            'page_id' => 2,
            'page_element_type_id' => 1,
        ]);

        $mapLat = PageElement::create([
            'name' => 'lat',
            'values' => '50',
            'page_element_type_id' => 1,
            'page_id' => 2,
        ]);

        $mapLng = PageElement::create([
            'name' => 'lng',
            'values' => '50',
            'page_element_type_id' => 1,
            'page_id' => 2,
        ]);


        $addresses = PageElement::create([
            'name' => 'addresses',
            'values' => [
                ["address" => "abcabc"],
                ["address" => "123123"]
            ],
            'page_id' => 2,
            'page_element_type_id' => 3,
        ]);

        $addressesTitle = PageElement::create([
            'name' => 'addresses_title',
            'values' => 'Адрес',
            'page_id' => 2,
            'page_element_type_id' => 1,
        ]);

        $emailAddresses = PageElement::create([
            'name' => 'email_addresses',
            'values' => [
                ["email_address" => "aabbcc"],
                ["email_address" => "112233"]
            ],
            'page_id' => 2,
            'page_element_type_id' => 3,
        ]);


        $emailAddressesTitle = PageElement::create([
            'name' => 'email_addresses_title',
            'values' => 'Почта',
            'page_id' => 2,
            'page_element_type_id' => 1,
        ]);

        $phoneNumbers = PageElement::create([
            'name' => 'phone_numbers',
            'values' => [
                ["phone_number" => "8777777"],
                ["phone_number" => "87777785678"],
                ["phone_number" => "645645645675"]
            ],
            'page_id' => 2,
            'page_element_type_id' => 3,
        ]);

        $phoneNumbersTitle = PageElement::create([
            'name' => 'phone_numbers_title',
            'values' => 'Номера телефонов',
            'page_id' => 2,
            'page_element_type_id' => 1,
        ]);

        $address = PageElement::create([
            'name' => 'address',
            'page_element_type_id' => 1,
            'parent_element_id' => $addresses->id,
        ]);

        $emailAddress = PageElement::create([
            'name' => 'email_address',
            'page_element_type_id' => 1,
            'parent_element_id' => $emailAddresses->id,
        ]);

        $phoneNumber = PageElement::create([
            'name' => 'phone_number',
            'page_element_type_id' => 1,
            'parent_element_id' => $phoneNumbers->id,
        ]);








        // About
        $banner = PageElement::create([
            'name' => 'banner',
            'values' => '1',
            'page_id' => 3,
            'page_element_type_id' => 6,
        ]);

        $aboutButtonLink = PageElement::create([
            'name' => 'about_button_link',
            'values' => 'https://www.youtube.com/embed/lvtfD_rJ2hE',
            'page_id' => 3,
            'page_element_type_id' => 1,
        ]);

        $partnersDescription = App\PageElement::create([
            'name' => 'partners_description',
            'values' => '<h1>Мы представлены на</h1><p>Laborum dolo rumes fugats untras. </p>',
            /*
                'Etharums ser quidem rerum facilis dolores nemis omnis fugats. ' .
                'Lid est laborum dolo rumes fugats untras.1</p>'
            */
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $headingTitle = App\PageElement::create([
            'name' => 'heading_title',
            'values' => 'Добро пожаловать в <span>SoftBox</span>',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $headingSubTitle = App\PageElement::create([
            'name' => 'heading_sub_title',
            'values' => 'Мы помогаем маркетологам создавать продукты',
            'page_id' => 3,
            'page_element_type_id' => 1,
        ]);

        $membersDescription = App\PageElement::create([
            'name' => 'members_description',
            'values' => '<h1>Команда SoftBox1</h1><p>Laborum dolo rumes fugats untras. </p>',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $rightImage = PageElement::create([
            'name' => 'right_image_block',
            'values' => '1',
            'page_id' => 3,
            'page_element_type_id' => 6
        ]);

        $leftImage = PageElement::create([
            'name' => 'left_image_block',
            'values' => '1',
            'page_id' => 3,
            'page_element_type_id' => 6
        ]);

        $rightText = PageElement::create([
            'name' => 'right_text_block',
            'values' => '<h1>О <span>SoftBox</span></h1>' .
                '<p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler ',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $leftText = PageElement::create([
            'name' => 'left_text_block',
            'values' => '<h1><span>Миссия</span> SoftBox</h1>' .
                '<p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler</p>',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $productsForSaleCount = PageElement::create([
            'name' => 'products_for_sale_count',
            'values' => '38436',
            'page_id' => 3,
            'page_element_type_id' => 1,
        ]);

        $productsBoughtCount = PageElement::create([
            'name' => 'products_bought_count',
            'values' => '68254',
            'page_id' => 3,
            'page_element_type_id' => 1,
        ]);

        $happyCustomerCount = PageElement::create([
            'name' => 'happy_customer_count',
            'values' => '25546',
            'page_id' => 3,
            'page_element_type_id' => 1,
        ]);

        $customerCount = PageElement::create([
            'name' => 'customer_count',
            'values' => '76358',
            'page_id' => 3,
            'page_element_type_id' => 1,
        ]);


        $partners = PageElement::create([
            'name' => 'partners',
            'values' => [
                ['partner' => 1],
                ['partner' => 1],
                ['partner' => 1],
            ],
            'page_id' => 3,
            'page_element_type_id' => 3
        ]);

        $members = PageElement::create([
            'name' => 'members',
            'values' => [
                ["member" => ["name"=> "Aibek", "profile_picture" => '1', "position" => "php",  "email" => "a@b.c",
                    "twitter" => "#", "facebook" => "#", "basket" => "#",]],
                ["member" => ["name" => "aa",   "profile_picture" => '1', "position" => "bb",   "email" => "cc",
                    "twitter" => "#", "facebook" => "#", "basket" => "#",]],
                ["member" => ["name" => "11",   "profile_picture" => '1', "position" => "22",   "email" => "33",
                    "twitter" => "#", "facebook" => "#", "basket" => "#",]],
                ["member" => ["name" => "999",  "profile_picture" => '1', "position" => "888",  "email" => "777",
                    "twitter" => "#", "facebook" => "#", "basket" => "#",]],
                ["member" => ["name" => "new",  "profile_picture" => '1', "position"=> "sdsd", "email"=> "asdasd",
                    "twitter" => "#", "facebook" => "#", "basket" => "#",]]
            ],
            'page_id' => 3,
            'page_element_type_id' => 3,
        ]);

        $member = PageElement::create([
            'name' => 'member',
            'parent_element_id' => $members->id,
            'page_element_type_id' => 5,
        ]);

        $partner = PageElement::create([
            'name' => 'partner',
            'parent_element_id' => $partners->id,
            'page_element_type_id' => 6,
        ]);

        $memberName = PageElement::create([
            'name' => 'name',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $memberPosition = PageElement::create([
            'name' => 'position',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $memberProfilePicture = PageElement::create([
            'name' => 'profile_picture',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $member_email = PageElement::create([
            'name' => 'email',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);


        $member_facebook = PageElement::create([
            'name' => 'facebook',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $member_twitter = PageElement::create([
            'name' => 'twitter',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);


        $member_basket = PageElement::create([
            'name' => 'basket',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);


    }
}