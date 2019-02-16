<?php

use Faker\Generator as Faker;

$factory->define(App\BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'content' => $faker->text,
        'author_id' => 1,
    ];
});

$factory->state(App\BlogPost::class, 'test', function(Faker $faker) {
    return [
        'title' => 'Title for test blog post',
        'content' => '<p><i>dsfdsfd</i>sfco<strong>ntent2</strong></p><ol>
            <li>fsdfsdf<a href="http://www.example.com/example">http://www.example.com/example</a> \
            </li><li>sdfsdfsd</li></ol><h2>da 1231231231</h2><ul><li>sdfsdfdsfsd</li><li>fdsfdsf</li>
            </ul><figure class="table"><table><thead><tr><th>1</th><th>2</th></tr></thead><tbody><tr>
            <td>3</td><td>4</td></tr></tbody></table></figure><blockquote><p>dsdsadsdadwddscasdfassad</p>
            </blockquote><h3>hgh</h3><p>asdasd</p><h4>asdsd</h4><p>sadasd</p><figure class="media"> 
            <oembed url="https://www.youtube.com/watch?v=YkF4w6w27W0"></oembed></figure><figure class="image"> 
            <img src="/storage/images/96/66/93.jpg"><figcaption>dffdgfgdf</figcaption></figure>',
        'author_id' => 1,
    ];
});