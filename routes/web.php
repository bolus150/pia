<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/film/{id}', 'HomeController@film')->name('film');
Route::get('/removeFilmFromBasket/{id}', 'HomeController@removeFilmFromBasket')->name('removeFilmFromBasket');
Route::get('/addFilmToBasket/{id}', 'HomeController@addFilmToBasket')->name('addFilmToBasket');
Route::get('/basket', 'HomeController@basket')->name('basket');
Route::get('/searchFilm', 'HomeController@searchFilm')->name('searchFilm');
