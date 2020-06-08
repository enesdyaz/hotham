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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/hotham/seedo', 'HothamController@seedo');
Route::get('/hotham/eatdrink', 'HothamController@eatdrink');
Route::get('/hotham/stay', 'HothamController@stay');
Route::get('/hotham/trip', 'HothamController@trip');
Route::get('/hotham/event', 'HothamController@event');


Route::post('/hotham/add_category_eatdrink', 'HothamController@store');
Route::post('/hotham/add_eatdrink', 'HothamController@storeEatDrink');
Route::get('/hotham/add_eatdrink/{eatdrink}', 'HothamController@showEatDrink');
Route::delete('/hotham/add_eatdrink/{eatdrink}', 'HothamController@destroyEatDrink');
Route::get('/hotham/add_eatdrink/{eatdrink}/edit', 'HothamController@editEatDrink');
Route::put('/hotham/add_eatdrink/{eatdrink}', 'HothamController@updateEatDrink');  //update



//photo
Route::post('/hotham/add_eatdrink/photo', 'PhotoController@store');
Route::delete('/hotham/add_eatdrink/photo/{photo}', 'PhotoController@deletePhoto');




