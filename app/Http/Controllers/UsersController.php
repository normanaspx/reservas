<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(request $data){
	    $data = request()->all();
	    Signup::create([
		   'NOMBRES' => $data['names'],
		   'APELLIDOS'   => $data['second_name'],
		   'TELEFONO'   => $data['cel'],
		   'FECHA_NACIMIENTO'   => $data['birthday_date'],
		   'GENERO'   => $data['customRadio'],
		   'NACIONALIDAD'   => $data['nationality']
	    ]);
	    return view('main/welcome');
    }
}
