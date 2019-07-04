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

Route::get('/', 'SiteController@home')->name('home');
Route::get('curriculum-vitae-carlos-amores', 'SiteController@curriculum')->name('curriculum');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
	Route::get('/', 'CmsController@home')->name('cms-home');
	Route::get('/profile', 'CmsController@profile')->name('cms-profile');
	Route::post('/profile', 'CmsController@updateProfile')->name('cms-profile-update');
	Route::resource('/work', 'WorkController');
	Route::resource('/skill', 'SkillController');
	Route::resource('/miniskill', 'MiniskillController');
});
