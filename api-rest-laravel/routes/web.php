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

// Le indicamos la ruta y en este caso como es un controlador le indicamos
// El nombre del controlador y el nombre de la función que tiene que ejecutar
//Ruta de prueba
Route::get('/test-orn', 'PruebasController@testOrm');

//Ruta de la API
Route::get('/usuario/pruebas', 'UserController@pruebas');
Route::get('/categorias/pruebas', 'CategoryController@pruebas');
Route::get('/post/pruebas', 'PostController@pruebas');
