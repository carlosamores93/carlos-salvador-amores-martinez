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
    return redirect(route('curriculum'));
});

Route::get('/admin', function () {
    return view('back.home');
});

Route::get('curriculum-vitae', 'SiteController@curriculum')->name('curriculum');
//Route::get('bautizo-camila', 'SiteController@bautizo')->name('bautizo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
