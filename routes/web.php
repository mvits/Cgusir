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

    #Rutas Usuarios
    Route::resource('usuarios', 'UsuariosController');
    Route::get('usuarios/{id}/destroy', [
        'uses' => 'UsuariosController@destroy',
        'as'   => 'usuarios.destroy',
    ]);

    # Rutas Autores
    Route::resource('autores', 'AutoresController');
    Route::get('autores/{id}/destroy', [
        'uses' => 'AutoresController@destroy',
        'as'   => 'autores.destroy',
    ]);

    # Rutas Áreas Conocimiento
    Route::resource('areasConocimiento', 'AreasConocimientoController');
    Route::get('areasConocimiento/{id}/destroy', [
        'uses' => 'AreasConocimientoController@destroy',
        'as'   => 'areasConocimiento.destroy',
    ]);
    Route::get('areasConocimiento/{id}/descripcion', [
        'uses' => 'AreasConocimientoController@descripcion',
        'as'   => 'areasConocimiento.descripcion',
    ]);

    # Rutas Libros
    Route::resource('libros', 'LibrosController');
    Route::get('libros/{id}/destroy', [
        'uses' => 'LibrosController@destroy',
        'as'   => 'libros.destroy',
    ]);

});
