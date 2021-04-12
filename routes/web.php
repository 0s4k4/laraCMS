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

Route::get('/', function(){
    return view('plantilla');
});

Route::get('/usuario/{id}/{nombre}', function ($id,$nombre) {
    return "el usuario con el ID: " .$id . " Nombre: " .$nombre;
});

//cuando inicas en contacto, se ejecuta el controlador con la accion index
Route::get('/contacto','EjemploController@index');
Route::get('/contacto/{id}/{titulo}/{categoria}','EjemploController@show');


Route::get('/ejemplo','EjemploController@index');