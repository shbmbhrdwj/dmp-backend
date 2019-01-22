<?php

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

Route::middleware('auth:api')->group(function () {
    Route::get('user', 'API\UserController@details');
    Route::apiResource("tasks", "API\TaskController");
    Route::get('categories/{category}/providers', "API\CategoryController@providers");
    Route::get("categories", "API\CategoryController@index");
});


Route::post("login", "API\UserController@login");
Route::post("register", "API\UserController@register");
