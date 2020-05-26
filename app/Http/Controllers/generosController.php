<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\genero;

class generosController extends Controller
{
  public function listado(){
    $generos = genero::all();

      $vac = compact("generos");
      return view("listaGeneros",$vac);
  }
}
