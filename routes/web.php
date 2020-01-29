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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/done', 'EventOrganizerController@index')->name('eo.index');
Route::get('/form', 'EventOrganizerController@create')->name('eo.create')->middleware('verified', 'hasFilledForm');
Route::get('/form/edit', 'EventOrganizerController@edit')->name('eo.edit');
Route::post('/form/store', 'EventOrganizerController@store')->name('eo.store');

Route::get('/profile', 'UserController@index')->name('user.index')->middleware('verified', 'mustFilledForm');
Route::get('/preview-certificate', 'UserController@preview')->name('user.preview')->middleware('verified', 'mustFilledForm');
Route::post('/profile/update', 'UserController@update')->name('user.update')->middleware('verified', 'mustFilledForm');

Route::get('/admin', 'AdminController@index')->name('admin.index');
Route::get('/admin/certif', 'AdminController@allCertif')->name('admin.certif');
Route::get('/admin/event-organizers', 'AdminController@allEos')->name('admin.eos');
Route::get('/admin/user/create', 'AdminController@create')->name('admin.user.create');
Route::post('/admin/user/store', 'AdminController@store')->name('admin.user.store');
Route::get('/admin/user/event-organizer/{id}', 'AdminController@eventOrganizer')->name('admin.user.eo');
Route::post('/admin/user/event-organizer/store', 'AdminController@eventOrganizerStore')->name('admin.user.eo.store');
Route::get('/admin/setting', 'AdminController@setting')->name('admin.setting');
Route::post('/admin/setting/store', 'AdminController@storeSetting')->name('admin.setting.store');
Route::get('/admin/nonaktif/{id}', 'AdminController@nonactivate')->name('admin.nonactivate');
Route::get('/admin/detail/{id}', 'AdminController@detail')->name('admin.detail');
Route::post('/admin/detail/update', 'AdminController@update')->name('admin.detail.store');
Route::post('/admin/detail/verified', 'AdminController@verified')->name('admin.detail.verified');
Route::get('/admin/detail/lock/{id}', 'AdminController@lock')->name('admin.detail.lock');
Route::get('/admin/has-certif/{id}', 'AdminController@hasCertif')->name('admin.hasCertif');
Route::get('/admin/certif/user/{id}', 'AdminController@userCertif')->name('admin.certif.user');
Route::get('/admin/event-organizers/user/{id}', 'AdminController@userEos')->name('admin.eos.user');
Route::get('/admin/all-has-certif', 'AdminController@allHasCertif')->name('admin.allHasCertif');
Route::get('/admin/all-not-has-certif', 'AdminController@allNotHasCertif')->name('admin.allNotHasCertif');

// Route::group(['middleware' => 'web', 'prefix' => 'item'], function()
// {
//     Route::get('')
//
// });
