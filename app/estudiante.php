<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiante extends Model
{  


  public $table="estudiantes";
    protected $primarykey="id";
public $timestamps = false; 
	protected $fillable = [
        'nombre,apellido,cedula,sexo,idSemestre'];
}
