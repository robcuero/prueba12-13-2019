<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class semestre extends Model
{
  public $table="semestres";
    protected $primarykey="id";
public $timestamps = false; 
	protected $fillable = [
        'semetre,paralelo'];
}
