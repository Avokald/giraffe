<?php

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
        $heading = App\PageElement::create([
            'name' => 'heading',
            'values' => 'Увеличим Ваши продажи с помощью внедрения <br> \"AmoCRM\" и CRM системы \"Битрикс 24\"',
            'page_id' => 1,
            'page_element_type_id' => 2,
        ]);

        $banner = App\PageElement::create([
            'name' => 'banner',
            'values' => 'images/hero-image01.png',
            'page_id' => 1,
            'page_element_type_id' => 6,
        ]);

        // Contacts
        $addresses = App\PageElement::create([
            'name' => 'addresses',
            'values' => [
                ["address" => "abcabc"],
                ["address" => "123123"]
            ],
            'page_id' => 2,
            'page_element_type_id' => 3,
        ]);

        $emailAddresses = App\PageElement::create([
            'name' => 'email_addresses',
            'values' => [
                ["email_address" => "aabbcc"],
                ["email_address" => "112233"]
            ],
            'page_id' => 2,
            'page_element_type_id' => 3,
        ]);

        $phoneNumbers = App\PageElement::create([
            'name' => 'phone_numbers',
            'values' => [
                ["phone_number" => "8777777"],
                ["phone_number" => "87777785678"],
                ["phone_number" => "645645645675"]
            ],
            'page_id' => 2,
            'page_element_type_id' => 3,
        ]);

        $address = App\PageElement::create([
            'name' => 'addresses',
            'page_element_type_id' => 1,
            'parent_element_id' => $addresses->id,
        ]);

        $emailAddress = App\PageElement::create([
            'name' => 'email_address',
            'page_element_type_id' => 1,
            'parent_element_id' => $emailAddresses->id,
        ]);

        $phoneNumber = App\PageElement::create([
            'name' => 'phone_number',
            'page_element_type_id' => 1,
            'parent_element_id' => $phoneNumbers->id,
        ]);

        // About
        $partnersDescription = App\PageElement::create([
            'name' => 'partners_description',
            'values' => '<h1>Команда SoftBox1</h1><p>Laborum dolo rumes fugats untras. ' .
                        'Etharums ser quidem rerum facilis dolores nemis omnis fugats. ' .
                        'Lid est laborum dolo rumes fugats untras.1</p>',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $rightImage = App\PageElement::create([
            'name' => 'right_image_block',
            'values' => '',
            'page_id' => 3,
            'page_element_type_id' => 6
        ]);

        $leftImage = App\PageElement::create([
            'name' => 'left_image_block',
            'values' => '',
            'page_id' => 3,
            'page_element_type_id' => 6
        ]);

        $rightText = App\PageElement::create([
            'name' => 'right_text_block',
            'values' => '<h1>О <span>SoftBox</span></h1>' .
                         '<p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler ' .
                         'isque the mattis leo quam aliquet congue this there placerat mi id nisi ' .
                         'they interdum mollis Praesent pharetra justo ut sceleris que the mattis. </p>',
                         '<p>Leo quam aliquet. Nunc placer atmi id nisi interdum mollis quam. '.
                         'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ' .
                         'eirmod tempor invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);

        $leftText = App\PageElement::create([
            'name' => 'left_text_block',
            'values' => '<h1><span>Миссия</span> SoftBox</h1>' .
                         '<p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler ' .
                         'isque the mattis leo quam aliquet congue this there placerat mi id nisi ' .
                         'they interdum mollis Praesent pharetra justo ut sceleris que the mattis. </p>',
                         '<p>Leo quam aliquet. Nunc placer atmi id nisi interdum mollis quam. '.
                         'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy ' .
                         'eirmod tempor invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>',
            'page_id' => 3,
            'page_element_type_id' => 2,
        ]);


        $partners = App\PageElement::create([
            'name' => 'partners',
            'values' => '',
            'page_id' => 3,
            'page_element_type_id' => 3
        ]);

        $members = App\PageElement::create([
            'name' => 'members',
            'values' => '[
                {"member": {"name": "Aibek", "position": "php",  "email_address": "a@b.c"}}, 
                {"member": {"name": "aa",    "position": "bb",   "email_address": "cc"}}, 
                {"member": {"name": "11",    "position": "22",   "email_address": "33"}}, 
                {"member": {"name": "999",   "position": "888",  "email_address": "777"}}, 
                {"member": {"name": "new",   "position": "sdsd", "email_address": "asdasd"}}]',
            'page_id' => 3,
            'page_element_type_id' => 3,
        ]);

        $member = App\PageElement::create([
            'name' => 'member',
            'parent_element_id' => $members->id,
            'page_element_type_id' => 5,
        ]);

        $partner = App\PageElement::create([
            'name' => 'partner',
            'parent_element_id' => $partners->id,
            'page_element_type_id' => 6,
        ]);

        $memberName = App\PageElement::create([
            'name' => 'name',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $memberPosition = App\PageElement::create([
            'name' => 'position',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $memberProfilePicture = App\PageElement::create([
            'name' => 'profile_picture',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $member_email = App\PageElement::create([
            'name' => 'email',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);


        $member_facebook = App\PageElement::create([
            'name' => 'facebook',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);

        $member_twitter = App\PageElement::create([
            'name' => 'twitter',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);


        $member_basket = App\PageElement::create([
            'name' => 'basket',
            'parent_element_id' => $member->id,
            'page_element_type_id' => 1,
        ]);


    }
}
