<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/login','API\AuthController@login');
Route::post('/register','API\AuthController@register');
//list mp3
Route::get('/listmp3','API\AuthController@listmp3');
Route::get('/album','API\AuthController@listalbum');
Route::get('/category','API\AuthController@listcategory');
Route::get('/songhome','API\AuthController@getsonghome');
Route::get('/albumhome','API\AuthController@getalbumhome');
Route::get('/categoryhome','API\AuthController@getcategoryhome');
Route::get('/banner','API\AuthController@getbanner');
Route::get('/album/{id}','API\AuthController@getlistmp3');
Route::get('/category/{id}','API\AuthController@getlistmp3category');
Route::get('/search/{keyword}','API\AuthController@getsearch');
Route::get('/love/{id}','API\AuthController@lovemusic');




//web services
Route::get('/index','API\AuthController@index');
Route::get('/mp3','API\AuthController@mp3');
Route::get('/add', 'API\AuthController@getadddata');
Route::post('/postdata', 'API\AuthController@postdata');
Route::get('/edit', 'API\AuthController@getedit');
Route::get('/edit/{id}','API\AuthController@getedit');
Route::get('/delete/{id}','API\AuthController@delete');
Route::get('/addalbum', 'API\AuthController@getaddalbum');
Route::post('/postalbum', 'API\AuthController@postalbum');
