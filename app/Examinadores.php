<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Examinadores extends Model
{
  protected $fillable=[ //Para lograr la asignacion masiva a traves de eloquente es necesario
        'name',         // habilitar la asignacion masiva
        'email',
        'password',
        'apellido',


       ];

  public function aplicantes (){
    return $this->hasMany(Usuario::class);

}     
}
