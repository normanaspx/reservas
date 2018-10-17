<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
	public $timestamps = false;
     protected $primaryKey = 'ID_SERVICIO';
     protected $table = 'SERVICIO';
     protected $fillable = [
 	  'NOMBRE',
 	  'DESCRIPCION',
 	  'ID_DETALLE_SERVICIO'
     ];
}
