<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
  public $table="genres";
  public $primaryKey="id";
  public $timestamps= false;
  public $guarded=[];



}
