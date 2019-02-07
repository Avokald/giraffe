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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('services', 'Web\ServiceController@index')->name('services.index');
Route::get('services/{service}', 'Web\ServiceController@show')->name('services.show');

Route::get('categories', 'Web\CategoryController@index')->name('categories.index');
Route::get('categories/{category}', 'Web\CategoryController@show')->name('categories.show');

Route::get('compilations', 'Web\ServiceCompilationController@index')->name('compilations.index');
Route::get('compilations/{compilation}', 'Web\ServiceCompilationController@show')->name('compilations.show');

Route::get('blog', 'Web\BlogPostController@index')->name('blogpost.index');
Route::get('blog/{blog_post}', 'Web\BlogPostController@show')->name('blogpost.show');

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
    Route::resource('categories', 'CategoryController');
    Route::resource('compilations', 'ServiceCompilationController');
});
Route::get('home', 'Web\HomeController@index')->name('home');

Route::get('{page}', 'Web\PageController@show')->name('page.show');

