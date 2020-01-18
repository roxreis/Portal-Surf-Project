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
    // return view('welcome');
    return view('home');
});

Route::get('/encontre', 'EncontreController@viewEncontre');
Route::get('/home', "SiteController@viewHome");

Route::get('/caronas', 'CaronaController@viewCarona');
Route::get('/PerfilCaronas', 'CaronaController@viewPerfilCarona');
Route::get('/CaronasAvaliar', 'CaronaController@viewCaronasAvaliar');

Route::get('/desapego',"DesapegoController@viewDesapego");
Route::get('/desapegoCadastroOferta',"DesapegoController@viewDesapegoCadastroOferta");
Route::get('/desapegoOfertasUsuario',"DesapegoController@viewDesapegoOfertasUsuario");
Route::get('/desapegoOfertaIndividual',"DesapegoController@viewDesapegoOfertaIndividual");

Route::get('/login',"Auth\LoginController@viewLogin");

Route::post('/register',"Auth\RegisterController@create");
// Route::post('/register',"Auth\RegisterController@viewRegister");

Route::get('/usuarioDados',"UsuarioController@viewUsuarioDados"); /*confirmar se nao ha um controller jah criado pelo laravel para isso antes de criar este controller */

 Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
