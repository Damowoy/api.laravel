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

Route::group(['middleware' => 'auth:api'], function() {
    
    Route::get('orders', 'Order\OrderController@index');
    Route::get('orders/{id}', 'Order\OrderController@show');
    Route::get('myorders', 'Order\OrderController@showMy');
    Route::post('orders', 'Order\OrderController@store');
    Route::put('orders/{id}', 'Order\OrderController@update');
    Route::delete('orders/{id}', 'Order\OrderController@delete');
    
    Route::get('stdate', 'Order\OrderController@showStdate');
    Route::get('stdate/{id}', 'Order\OrderController@showStdate');
    Route::get('stdate/order/{id}', 'Order\OrderController@showStdateOrder');
    Route::post('stdate', 'Order\OrderController@storeStdate');
    
    Route::get('comment', 'Order\OrderController@showComment');
    Route::post('comment', 'Order\OrderController@storeComment');
    
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');


