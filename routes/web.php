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
    return view('index');
});

// Rutas Bilblioteca
/*
Route::group(['prefix' => 'biblioteca'], function () {

Route::get('autores/{nombre?}', function ($nombre = 'stiv') {

var_dump($nombre);

});

});
 */
