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

Route::get('/tes', function () {
    return view('layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/done', 'EventOrganizerController@index')->name('eo.index');
Route::get('/form', 'EventOrganizerController@create')->name('eo.create');
Route::get('/form/edit', 'EventOrganizerController@edit')->name('eo.edit');
Route::post('/form/store', 'EventOrganizerController@store')->name('eo.store');

Route::get('/profile', 'UserController@index')->name('user.index');
Route::get('/preview-certificate', 'UserController@preview')->name('user.preview');
Route::post('/profile/update', 'UserController@update')->name('user.update');

Route::get('/admin', 'AdminController@index')->name('admin.index');

// Route::group(['middleware' => 'web', 'prefix' => 'item'], function()
// {
//     Route::get('')
//
// });
