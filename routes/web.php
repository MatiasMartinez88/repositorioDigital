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


Route::get('/peliculas', function () {
    return "listado de peliculas";
});


Route::get('register', function () {
    return '';
});

Route::get('saludar/{nombre}/{apellido?}', function ($nombre,$apellido = "sin apellido") {
       return "hola $nombre $apellido esperamos que disfrutes de nuestro sitio web y de todas las peliculas que ofrecemos :)" ;
     });

     Route::get('pelicula/{id}', function ($id) {
             $vac=compact("id");
               return view('listadoPeliculas',$vac) ;
             });


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
