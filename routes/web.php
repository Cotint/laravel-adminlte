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

Route::middleware(['auth'])->group(function () {
    Route::get('/ct', 'Panel\HomeController@index')->name('dashboard');
    Route::get('/ct/categories', 'Panel\CategoriesController@index')->name('categories.index');
    Route::get('/ct/tags', 'Panel\TagsController@index')->name('tags.index');
    Route::get('/ct/options', 'Panel\OptionsController@index')->name('options.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

