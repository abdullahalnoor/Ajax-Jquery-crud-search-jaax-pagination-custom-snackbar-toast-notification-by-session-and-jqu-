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

Route::get('/dashboard','WelcomeController@index')->name('dashboard');

Route::get('/category/{search?}','CategoryController@index')->name('category');
Route::get('/add-category','CategoryController@create')->name('create.category');

Route::post('/add-category','CategoryController@save')->name('save.category');

Route::get('/edit-category/{id}','CategoryController@edit')->name('edit.category');

Route::post('/update-category','CategoryController@update')->name('update.category');

Route::post('/delete-category','CategoryController@delete')->name('delete.category');


Route::get('/text','TextController@index')->name('text');
Route::get('/add-text','TextController@create')->name('add.text');
Route::post('/add-text','TextController@store');