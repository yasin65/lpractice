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

Route::get('/', 'HomeController@index');
Route::get('/information', 'HomeController@information')->name('inform');
Route::get('/another', 'HomeController@another');
Route::get('/example', 'HomeController@example');
Route::get('/page', 'HomeController@page');
Route::get('/contact', 'HomeController@contact')->name('contact');

Route::get('/contact1', 'Homecontroller@contact1')->name('contact1');
Route::post('/submit', 'HomeController@submit')->name('submit');
Route::get('/edit/{id}', 'HomeController@edit');
Route::get('/delete/{id}', 'HomeController@delete');
Route::post('/update{id}', 'Homecontroller@update');

Route::post('/submit1', 'HomeController@submit1')->name('submit1');
Route::get('/delete1{id}', 'HomeController@delete1');
Route::get('/edit1{id}', 'HomeController@edit1');
Route::post('/update1{id}', 'Ycontroller@update1')->name('update1');

Route::post('/submit2', 'Bcontroller@submit2');
Route::get('/delete2/{id}', 'Bcontroller@delete2');
Route::get('/edit2/{id}','Bcontroller@edit2');
Route::post('/update2/{id}','Bcontroller@update2');

// Route::get('/update1', 'HomeController@update');

// Route::get('/delete{id}', 'HomeController@delete');
