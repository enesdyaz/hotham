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


