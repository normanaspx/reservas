<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationDetail extends Model
{
	public $timestamps = false;
         protected $primaryKey = 'ID_DETALLE_RESERVA';
         protected $table = 'DETALLE_RESERVA';
         protected $fillable = [
     	   'ID_RESERVA',
     	   'ID_ASIENTO'
         ];
}
