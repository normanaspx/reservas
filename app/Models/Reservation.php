<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	public $timestamps = false;
     protected $primaryKey = 'ID_RESERVA';
     protected $table = 'RESERVA';
     protected $fillable = [
 	   'ID_USUARIO',
 	   'ID_SERVICIO',
 	   'FECHA'
     ];
}
