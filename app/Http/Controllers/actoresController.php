<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Actor;

class actoresController extends Controller
{
  public function listado(){
    $actores = actor::paginate (7);

      $vac = compact("actores");
      return view("listaActores",$vac);
}

  public function agregar(Request $req){

  $reglas=[
    "first_name"=>"string|min:3|max:10",
    "last_name"=>"string|min:3|max:10",
    "rating"=>"numeric|min:0|max:10",
    "favorite_movie_id"=>"numeric",
    "poster" => "file"
   ];

   $mensajes=[
    "string"=> "El campo debe ser un texto",
    "min"=> "El campo nombre y apellido tiene un minimo de :min caracteres",
    "max"=> "El campo puntaje como actor tiene un maximo de :max",
    "numeric"=> "El campo actuación favorita y puntaje debe ser un numero",
    ];

     $this->validate($req, $reglas, $mensajes);


    $actorNuevo= new Actor();

    $ruta= $req->file("poster")->store("public");
    $nombreArchivo= basename($ruta);

    $actorNuevo->poster= $nombreArchivo;
    $actorNuevo->first_name= $req ["first_name"];
    $actorNuevo->last_name=$req ["last_name"];
    $actorNuevo->rating=$req ["rating"];
    $actorNuevo->favorite_movie_id=$req ["favorite_movie_id"];

    $actorNuevo->save();

    return redirect("/actores");

  }

    public function detalle($id){
    $actor = actor::find($id);
    $vac = compact("actor","id");
    return view("elegisteActor",$vac);
  }
}
