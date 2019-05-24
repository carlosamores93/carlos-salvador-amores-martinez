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
    return redirect(route('curriculum_vitae'));
});


Route::get('curriculum-vitae', 'SiteController@curriculum_vitae')->name('curriculum_vitae');
Route::get('bautizo-camila', 'SiteController@bautizo_camila')->name('bautizo_camila');
