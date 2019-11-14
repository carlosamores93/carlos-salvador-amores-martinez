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

/*DB::listen(function($query){
    echo "<pre>{$query->sql}</pre>";
});*/

Route::namespace('Frontend')->group(function () {
    Route::get('/', 'SiteController@home')->name('home');
    // Vistas para mi cv
    Route::get('curriculum-vitae-carlos-amores', 'CurriculumVitaeController@index')->name('curriculum');
    Route::get('curriculum-{name}', function ($name) {
        return redirect(route('curriculum'), 301);
    })->where('name', '[A-Za-z]+');
});


Route::group(['prefix' => 'crud-with-mongodb'], function () {
    Route::get('/', 'CarController@index')->name('crud-mongodb');
    Route::get('add', 'CarController@create')->name('crud-mongodb-add');
    Route::post('add', 'CarController@store');
    Route::get('edit/{id}', 'CarController@edit');
    Route::post('edit/{id}', 'CarController@update');
    Route::delete('{id}', 'CarController@destroy');
});

Route::group(['prefix' => 'crud-with-vuejs'], function () {
    Route::get('/', function () {
        return view('front.crud-vuejs.index');
    })->name('crud-vuejs');
});

Route::group(['prefix' => 'crud-with-angularjs'], function () {
    Route::resource('contacts', 'ContactController');
/*    Route::get('/', function () {
        return view('front.crud-angularjs.index');
    })->name('crud-angularjs');*/
});



// Authentication
Auth::routes();


Route::namespace('Backend')->group(function () {
    Route::prefix('admin')->group(function () {
        //Route::group(['middleware' => ['auth', 'superadmin']], function () {
            Route::get('/', 'CmsController@home')->name('cms-home');
            Route::get('/profile', 'CmsController@profile')->name('cms-profile');
            Route::post('/profile', 'CmsController@updateProfile')->name('cms-profile-update');
            Route::resource('/work', 'WorkController');
            Route::resource('/skill', 'SkillController');
            Route::resource('/miniskill', 'MiniskillController');
            Route::resource('/notice', 'NoticeController');
        //});
    });
});
/*Route::group(['prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => ['auth']], function () {
    Route::get('/', function(){
        return view('home');
    })->name('admin.home');
});*/
