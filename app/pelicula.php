<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
public $table="movies";
public $primaryKey="id";
public $timestamps= false;
public $guarded=[];


    //public function scopeBuscarpor($query, $tipo, $buscar){
      //if (($tipo) && ($buscar)){
        //return $query -> where ($tipo, like, "%buscar%");}}
  }
