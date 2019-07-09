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

Route::group(['middleware' => ['json.response','cors']], function () {

    Route::group(['prefix' => 'v1', 'namespace' => 'Api'], function() {

        Route::middleware('auth:api')->group(function () {

            Route::resource('/children', 'ChildController');
            Route::resource('/sponsorship', 'SponsorshipController');
            Route::resource('/crisis', 'CrisisController');
            Route::get('/stats', 'StatsController@index');

            Route::post('logout', 'AuthController@logout');

        });

        Route::post('register', 'AuthController@register');
        Route::post('login', 'AuthController@login');

    });

});
