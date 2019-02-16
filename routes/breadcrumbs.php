<?php

// Главная
Breadcrumbs::for('index', function($trail) {
    $trail->push('Главная', route('index'));
});

// Главная / Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('index');
    $trail->push('Блог', route('blogposts.index'));
});

Breadcrumbs::for('blogpost', function ($trail, $blogpost) {
    $trail->parent('blog');
    $trail->push($blogpost->title, route('blogposts.show', $blogpost->slug));
});

Breadcrumbs::for('services', function ($trail) {
    $trail->parent('index');
    $trail->push('Сервисы', route('services.index'));
});

Breadcrumbs::for('service', function ($trail, $service) {
    $trail->parent('services');
    $trail->push($service->name, route('services.show', $service->slug));
});

Breadcrumbs::for('categories', function ($trail) {
    $trail->parent('index');
    $trail->push('Категории', route('categories.index'));
});

Breadcrumbs::for('category', function ($trail, $category) {
    $trail->parent('categories');
    $trail->push($category->name, route('categories.show', $category->slug));
});

Breadcrumbs::for('compilations', function ($trail) {
    $trail->parent('index');
    $trail->push('Подбоки', route('compilations.index'));
});


Breadcrumbs::for('compilation', function ($trail, $compilation) {
    $trail->parent('compilations');
    $trail->push($compilation->name, route('compilations.show', $compilation->slug));
});


Breadcrumbs::for('tags', function ($trail) {
    $trail->parent('index');
    $trail->push('Теги', route('tags.index'));
});

Breadcrumbs::for('tag', function ($trail, $tag) {
    $trail->parent('tags');
    $trail->push($tag->title, route('tags.show', $tag->slug));
});

Breadcrumbs::for('about', function ($trail) {
    $trail->parent('index');
    $trail->push('О нас', route('about'));
});

Breadcrumbs::for('contacts', function ($trail) {
    $trail->parent('index');
    $trail->push('Контакты', route('contacts'));
});

Breadcrumbs::for('faqs', function ($trail) {
    $trail->parent('index');
    $trail->push('Поддержка', route('faqs.index'));
});

Breadcrumbs::for('faq', function ($trail, $faq) {
    $trail->parent('faqs');
    $trail->push($faq->title, route('faqs.show'));
});

//Breadcrumbs::for('', function ($trail) {
//    $trail->parent('');
//    $trail->push(, route(''));
//});
