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

Route::namespace('Frontend')->group(function () {
	Route::get('/', 'SiteController@home')->name('home');
	// Vistas para mi cv
	Route::get('curriculum-vitae-carlos-amores', 'CurriculumVitaeController@index')->name('curriculum');
	Route::get('curriculum-{name}', function ($name) {
		return redirect(route('curriculum'), 301);
	})->where('name', '[A-Za-z]+');
});

// Authentication
Auth::routes();


Route::namespace('Backend')->group(function () {
	Route::prefix('super-admin')->group(function () {
		Route::group(['middleware' => ['auth', 'superadmin']], function () {
			Route::get('/', 'CmsController@home')->name('cms-home');
			Route::get('/profile', 'CmsController@profile')->name('cms-profile');
			Route::post('/profile', 'CmsController@updateProfile')->name('cms-profile-update');
			Route::resource('/work', 'WorkController');
			Route::resource('/skill', 'SkillController');
			Route::resource('/miniskill', 'MiniskillController');
		});
	});
});

Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => ['auth']], function () {
	Route::get('/', function(){
		return view('home');
	})->name('klk');
});