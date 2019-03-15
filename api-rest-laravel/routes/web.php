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

Route::get('/pruebas/{nombre}',function($nombre){
    $texto = 'hola soy routa '. $nombre;
    return view('prueba', array(
        'texto' => $texto
    ));
});

Route::get('/animales', 'PruebasController@index');

Route::get('/test-orn', 'PruebasController@testOrm');
