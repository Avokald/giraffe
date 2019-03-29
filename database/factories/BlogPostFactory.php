<?php

use Faker\Generator as Faker;

$factory->define(App\BlogPost::class, function (Faker $faker) {
    return [
        'title' => $faker->streetName,
        'content' => $faker->text,
        'excerpt' => $faker->text(200),
        'author_id' => 1,
    ];
});

$factory->state(App\BlogPost::class, 'test', function(Faker $faker) {
    return [
        'title' => 'Title for test blog post',
        'content' => '
        <p>
        Nunc placerat mi id nisi interdum mollis. Praesent pharetra, justo ut scelerisque the mattis, leo quam aliquet congue. incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in henderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat sunt in culpa qui officia sunt in culpa qui officia.
        </p>
        <blockquote>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the indus try’s standard.</blockquote>
        <h2>We just know now gonna make</h2>
        <p>Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is has been the industry’s stasn ndard dummy text ever since the 1500s, when an unknown printer took a galley of it to make. Lorem Ipsum is the simply dummy text of the printing.</p>
        <ol>
            <li>List one is awesome. Adding list item is very easily.</li>
            <li>List one is awesome. Adding list item is very easily.</li>
            <li>List one is awesome. Adding list item is very easily.</li>
        </ol>
        <p>
        Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is has been the industry’s stasn ndard dummy text ever since the 1500s, when an unknown printer took a galley of it to make. Lorem Ipsum is the simply dummy text of the printing.
        </p>
        <ul>
            <li>Listing things in a list</li>
            <li>Pay close attention to number</li>
            <li>What happens next will shock you</li>
        </ul>
        <h2>We just know now gonna make</h2>
        <p>
        Lorem Ipsum is simply dummy text of the and typesetting industry. Lorem Ipsum is has been the industry’s stasn ndard dummy text ever since the 1500s, when an unknown printer took a galley of it to make. Lorem Ipsum is the simply dummy text of the printing.
        </p>
        ',
        'author_id' => 1,
    ];
});