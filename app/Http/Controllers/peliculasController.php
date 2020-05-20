<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//alt+92
use App\pelicula;

class peliculasController extends Controller
{
  public function listado(){
    $peliculas = pelicula::all();
       dd($peliculas);
      $vac = compact("peliculas");
      return view("listaPeliculas",$vac);
  }

  public function detalle($id){
    $vac = compact("id");
    return view("elejistePelicula",$vac);
  }

}
