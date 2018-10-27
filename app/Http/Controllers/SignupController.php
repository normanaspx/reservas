<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Redirect;
use App\Exceptions\Handler;
use Illuminate\Http\Request;

use App\Models\Signup;
use App\Models\Users;

class SignupController extends Controller
{
    public function index(){

    }

    public function create(){

    }

    public function store(request $request){
	    $new = new Signup();
	    $new->NOMBRES=$request->names;
	    $new->APELLIDOS=$request->second_name;
	    $new->TELEFONO=$request->cel;
	    $new->FECHA_NACIMIENTO=$request->birthday_date;
	    $new->GENERO=$request->customRadio;
	    $new->NACIONALIDAD=$request->nationality;
	    $new->save();
	    $id=$new->ID_CLIENTE;
    }
}
