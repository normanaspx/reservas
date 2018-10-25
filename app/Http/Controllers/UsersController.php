<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function store(request $data){
	    $data = request()->all();
	    Signup::create([
		   'ID_USUARIO' => $data['names'],
		   'ID_USUARIO'   => $data['second_name'],
		   'FECHA' => $data['second_name'],
	    ]);
	    return view('main/welcome');
    }
}
