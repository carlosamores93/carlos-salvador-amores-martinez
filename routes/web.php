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
Route::get('curriculum-vitae', 'SiteController@curriculum')->name('curriculum');
//Route::get('bautizo-camila', 'SiteController@bautizo')->name('bautizo');

Auth::routes();

Route::get('/admin', 'CmsController@home')->name('cms-home');

// Profile
Route::get('/admin/profile', 'CmsController@profile')->name('cms-profile');
Route::post('/admin/profile', 'CmsController@updateProfile')->name('cms-profile-update');
Route::resource('work', 'WorkController');
Route::resource('skill', 'SkillController');
Route::resource('miniskill', 'MiniskillController');