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

Route::get('services', 'Web\ServiceController@index');
Route::get('services/{service}', 'Web\ServiceController@show')->name('services.show');

Route::group([
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'admin',
    'as' => 'admin.',
], function() {
    Route::resource('services', 'ServiceController');
});

Auth::routes();

Route::get('/home', 'Web\HomeController@index')->name('home');
