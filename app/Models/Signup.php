<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
	public $timestamps = false;
	protected $primaryKey = 'ID_CLIENTE';
	protected $table = 'CLIENTE';
	protected $fillable = [
	    'NOMBRES',
	    'APELLIDOS',
	    'TELEFONO',
	    'FECHA_NACIMIENTO',
	    'GENERO',
	    'NACIONALIDAD'
	];
}
