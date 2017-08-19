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

Route::get('/', ['as' => 'principal', function () {
    return view('index');
}]);

Route::get('/biblioteca/', ['as' => 'biblioteca', function () {
    return view('biblioteca.index');
}]);

// Rutas Bilblioteca

Route::group(['prefix' => 'biblioteca/admin'], function () {

    Route::resource('usuarios', 'UsuariosController');
    Route::get('usuarios/{id}/destroy', [
        'uses' => 'UsuariosController@destroy',
        'as'   => 'usuarios.destroy',
    ]);

    Route::resource('autores', 'AutoresController');
    Route::get('autores/{id}/destroy', [
        'uses' => 'AutoresController@destroy',
        'as'   => 'autores.destroy',
    ]);

});
