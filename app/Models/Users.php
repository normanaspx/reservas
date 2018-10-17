<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	public $timestamps = false;
     protected $primaryKey = 'ID_USUARIO';
     protected $table = 'USUARIO';
     protected $fillable = [
 	   'ID_CLIENTE',
 	   'EMAIL',
 	   'PASSWORD',
 	   'FECHA_CREACION'
     ];
}
