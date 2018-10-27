<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
	public $timestamps = false;
         protected $primaryKey = 'ID_ASIENTO';
         protected $table = 'ASIENTO';
         protected $fillable = [
     	   'ASIENTO',
		   'Estado',
         ];
}
