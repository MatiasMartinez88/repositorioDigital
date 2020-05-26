<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class actoresController extends Controller
{
  public function listado(){
    $actores = actor::all();

      $vac = compact("actores");
      return view("listaActores",$vac);
}

  public function agregar(Request $req){
    $actorNuevo= new Actor();

    $actorNuevo->first_name= $req ["first_name"];
    $actorNuevo->last_name=$req ["last_name"];
    $actorNuevo->rating=$req ["rating"];
    $actorNuevo->favorite_movie_id=$req ["favorite_movie_id"];

    $actorNuevo->save();

    return redirect("/actores");

  }
}
