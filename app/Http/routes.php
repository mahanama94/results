<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses' => '\App\Http\Controllers\HomeController@index',
    'as' => 'home'
]);


/**
 * Authentication
 */
Route::get('/signup', [
    'uses' => "\App\Http\Controllers\AuthController@getSignup",
    "as" => "auth.signup",
]);

Route::post('/signup', [
    'uses' => "\App\Http\Controllers\AuthController@postSignup",
]);


Route::get('/login',[
    'uses' => "\App\Http\Controllers\AuthController@getLogin",
    "as" => "auth.login",
    'middleware' => ['guest']
]);

Route::post('/login', [
    'uses' => "\App\Http\Controllers\AuthController@postLogin",
    'middleware' => ['guest']
]);

Route::get('/logout', [
    'uses' => "\App\Http\Controllers\AuthController@getLogout",
    "as" => "auth.logout",
]);


/**
 * Search
 */

Route::get('/search', [
    'uses' => "\App\Http\Controllers\SearchController@getResults",
    'as' => 'search.results'
]);

/**
 * Results
 */

Route::get('/results', [
    'uses' => "\Results\Http\Controllers\ResultController@index"
]);

/**
 * Profile
 */

Route::get('/user/{indexNumber}',[
    'uses' => "\App\Http\Controllers\ProfileController@getProfile",
    'as' => 'profile.index'
]);

/**
 * Module
 */
Route::get('/module/{moduleCode}', [
    'uses' => "\App\Http\Controllers\ModuleController@getModule",
    'as' => 'module.index'
]);

/**
 * List
 */

Route::get('/list', [
   'uses' => '\App\Http\Controllers\ResultController@index',
    'as' => 'list.index'
]);