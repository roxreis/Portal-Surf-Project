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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/encontre', 'EncontreController@viewEncontre');
Route::get('/home', "SiteController@viewHome");
Route::get('/caronas', 'CaronaController@viewCarona');
Route::get('/desapego',"DesapegoController@viewDesapego");


Route::get('/encontre', 'EncontreController@viewEncontre');

Route::get('/home', "SiteController@viewHome");
Route::get('/caronas', 'CaronaController@viewCarona');

