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

Route::group(['namespace' => 'Api'], function () {
    Route::post('login', 'AuthController@login');
    Route::post('login/facebook', 'AuthController@loginWithFacebook');
    Route::post('register', 'AuthController@register');

    Route::group(['middleware' => 'auth:api'], function () {
        Route::post('logout', 'AuthController@logout');

        Route::get('user', 'UserController@detail');
        Route::put('user', 'UserController@update');

        Route::get('food/fatsecret', 'FoodController@searchFatsecret');
        Route::get('food/fatsecret/{food}', 'FoodController@detailFatsecret');

        Route::post('entry', 'EntryController@store');
        Route::get('entry', 'EntryController@index');


    });
});