<?php

use Illuminate\Support\Facades\Route;



/* caja luminosa

background: linear-gradient(90deg,#000,#323232);
}

.animate-bgbefore, .animate-bg:after{
  content:'';
  position: absolute;
  left: -8px;
  top: -8px;
  background: linear-gradient(120deg,#79fb00,#8d01a0,#031ba5,#ff004c,#e6036d,#fb0094,#ff6600,
    #04c2e4,#adad02,#00c3ff);
  background-size: 300%;
  width: calc(100% + 16px);
  height: calc(100% + 16px);
  z-index: -1;
  animation: BGgradient 15s ease infinite;
}

@keyframes BGgradient {
  0%{background-position: 0% 200%;}
  50%{background-position: 200% 0%;}
  100%{background-position: 0% 330%;}

}

.animate-bg:after{
filter:brightness(1.4);
filter: drop-shadow(16px 16px 20px rgb(248, 220, 97);
filter: blur(15px);

}

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

Route::get("/agregarActor", function () {
    return view("agregarActor");
});

Route::get("/editarPelicula", function () {
    return view("editarPelicula");
});


Route::post("/agregarActor", "actoresController@agregar");


Route::get("/actores", "actoresController@listado");

Route::get("/peliculas", "peliculasController@listado");

Route::get("/generos", "generosController@listado");


Route::get('pelicula/{title}', "peliculasController@detalle");


Route::get('actor/{title}', "actoresController@detalle");

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
