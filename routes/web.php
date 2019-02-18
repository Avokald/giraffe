<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('services', 'Web\ServiceController@index')->name('services.index');
Route::get('services/{service}', 'Web\ServiceController@show')->name('services.show');

Route::get('categories', 'Web\CategoryController@index')->name('categories.index');
Route::get('categories/{category}', 'Web\CategoryController@show')->name('categories.show');

Route::get('compilations', 'Web\ServiceCompilationController@index')->name('compilations.index');
Route::get('compilations/{compilation}', 'Web\ServiceCompilationController@show')->name('compilations.show');

Route::get('blog/tags/{tag}', 'Web\TagController@show')->name('tags.show');

Route::get('blog', 'Web\BlogPostController@index')->name('blogposts.index');
Route::get('blog/{blog_post}', 'Web\BlogPostController@show')->name('blogposts.show');

Route::get('faqs', 'Web\FaqController@index')->name('faqs.index');
Route::get('faqs/{faq}', 'Web\FaqController@show')->name('faqs.show');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'admin',
    'as' => 'admin.',
], function() {
    Route::resource('services', 'ServiceController');
    Route::resource('blog', 'BlogPostController');
    Route::resource('tags', 'TagController');

    Route::resource('pages', 'PageController');
    Route::resource('page-elements', 'PageElementController');
    Route::resource('menus', 'MenuController');
    Route::resource('menu-elements', 'MenuElementController');
    Route::resource('categories', 'CategoryController');
    Route::resource('compilations', 'ServiceCompilationController');

    Route::resource('faqs', 'FaqController');
    Route::resource('faq-categories', 'FaqCategoryController');


    Route::post('image-upload', 'Ajax\ImageController@store')->name('image.store');
    Route::delete('image-delete', 'Ajax\ImageController@destroy')->name('image.destroy');

    Route::post('file-upload', 'Ajax\MaterialController@store')->name('materials.store');
    Route::delete('file-delete', 'Ajax\MaterialController@destroy')->name('materials.destroy');
});
Route::get('home', 'Web\HomeController@index')->name('home');


// TODO Refactor
Route::get('about', function () {
    $page = \App\Page::findOrFail(3);
    return view('web.templates.about', [
        'page' => $page,
    ]);
})->name('about');

Route::get('/', function () {
    $page = \App\Page::findOrFail(1);
    $best_services = \App\Service::limit(12)->get();
    $best_compilations = \App\ServiceCompilation::limit(12)->get();
    return view('web.templates.index', [
        'page' => $page,
        'best_services' => $best_services,
        'best_compilations' => $best_compilations,
    ]);
})->name('index');

Route::get('contacts', function () {
    $page = \App\Page::findOrFail(2);
    return view('web.templates.contacts', [
        'page' => $page,
    ]);
})->name('contacts');

Route::get('faq', function () {
    $page = \App\Page::findOrFail(1);
    return view('web.templates.faq');
})->name('faqs');

//Route::get('{page}', 'Web\PageController@show')->name('page.show');

