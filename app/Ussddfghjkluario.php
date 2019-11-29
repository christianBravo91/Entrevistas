<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{

    protected $guard= 'administradores';
    use softDeletes;

    protected $fillable=[ //Para lograr la asignacion masiva a traves de eloquente es necesario
          'name',         // habilitar la asignacion masiva
          'email',
          'password',
          'apellido',
          'nacimiento',
          'examenTeorico',
          'entrevistaGrupal',
          'entrevistaIndividual',
          'examinadores_id'
         ];



}
