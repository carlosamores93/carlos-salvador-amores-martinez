<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource(
    'buyers',
    'Buyer\BuyerController',
    ['only' => ['index', 'show']]
);
Route::resource(
    'categories',
    'Category\CategoryController',
    ['except' => ['create', 'edit']]
);
Route::resource(
    'transactions',
    'Transaction\TransactionController',
    ['only' => ['index', 'show']]
);
Route::resource(
    'sellers',
    'Seller\SellerController',
    ['only' => ['index', 'show']]
);
Route::resource(
    'users',
    'User\UserController',
    ['except' => ['create', 'edit']]
);



// List articles
Route::get('articles', 'ArticleController@index');
// List single article
Route::get('article/{id}', 'ArticleController@show');
// Create new article
Route::post('article', 'ArticleController@store');
// Update article
Route::put('article', 'ArticleController@store');
// Delete article
Route::delete('article/{id}', 'ArticleController@destroy');
