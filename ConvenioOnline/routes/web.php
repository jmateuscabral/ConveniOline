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
    return view('login');
});

// Rota para o controller "ConvenioControlller" na função login
Route::get('/login', 'ConvenioController@login');

// Rota para o controller "ConvenioControlller" na função logado_inicio
Route::get('/inicio', 'ConvenioController@logado_inicio');

// Rota para o controller "ConvenioControlller" na função logado_formulario
Route::get('/formulario', 'ConvenioController@logado_formulario');
