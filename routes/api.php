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


        Route::post('food/', 'FoodController@store');
        Route::get('food/', 'FoodController@index');
        Route::get('food/fatsecret', 'FoodController@search');
        Route::get('food/fatsecret/{food}', 'FoodController@detailFatsecret');
        Route::delete('food/{food}', 'FoodController@destroy');

        Route::post('entry', 'EntryController@store');
        Route::get('entry', 'EntryController@userEntries');
        Route::get('entry/dategrouped', 'EntryController@dategrouped');
        Route::put('entry/{entry}', 'EntryController@update');
        Route::delete('entry/{entry}', 'EntryController@destroy');

        Route::get('achievement', 'AchievementController@userAchievements');
        Route::get('achievement/unlock', 'AchievementController@unlock');

        Route::get('mentalhealth', 'MentalHealthController@userMentalHealths');
        Route::post('mentalhealth', 'MentalHealthController@store');

        Route::get('seasoning', 'SeasoningController@index');

        Route::get('seasoningunit', 'SeasoningUnitController@index');


        Route::get('news', 'NewsController@index');
        Route::post('news', 'NewsController@store');
        Route::put('news/{news}', 'NewsController@update');
        Route::delete('news/{news}', 'NewsController@destroy');

        Route::get('bloodpressure', 'BloodPressureController@index');
        Route::post('bloodpressure', 'BloodPressureController@store');
        Route::put('bloodpressure/{bloodPressure}', 'BloodPressureController@update');
        Route::delete('bloodpressure/{bloodPressure}', 'BloodPressureController@destroy');

    });
});