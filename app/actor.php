<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class actor extends Model
{
  public $table="actors";
  public $primaryKey="id";
  public $timestamps= false;
  public $guarded=[];

  public function getNombreCompleto(){
    return $this->first_name . " " . $this->last_name;
  }
}
