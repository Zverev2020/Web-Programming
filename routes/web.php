<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/index', 'ApiController@indexAction');
Route::get('/contact', 'ApiController@contactAction');
Route::get('/section', 'ApiController@sectionAction');


Route::get('/auth', 'AuthController@auth');
Route::get('/registration', 'AuthController@registration');
Route::get('/reg', 'ApiController@reg');
Route::get('/search', 'ApiController@search');


Route::middleware('auth')->group(function() {
    Route::get('/logout', 'AuthController@logout');
});
