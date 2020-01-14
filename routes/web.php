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
Route::get('/PerfilCaronas', 'CaronaController@viewPerfilCarona');
Route::get('/CaronasAvaliar', 'CaronaController@viewCaronasAvaliar');
Route::get('/desapego',"DesapegoController@viewDesapego");
Route::get('/login',"Auth/LoginController@viewPaginaLogin");
Route::get('/usuarioCadastro',"Auth\RegisterController@viewUsuarioCadastro");
Route::post('/usuarioCadastro',"Auth\RegisterController@create");

Route::get('/usuarioDados',"UsuarioController@viewUsuarioDados"); /*confirmar se nao ha um controller jah criado pelo laravel para isso antes de criar este controller */






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
