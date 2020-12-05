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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/news', 'NewsController@index')->name('news');

Route::get('/new/{slug}', 'NewsController@solonew')->name('new');

Route::get('/contacts', 'ContactController@index')->name('contacts');

Route::get('/drivers', 'DriverController@index')->name('drivers');

Route::get('/cargo/{slug}', 'DriverController@cargo')->name('cargo');

