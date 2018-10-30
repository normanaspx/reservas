<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Reservation;

class TestController extends Controller
{
    public function fun_pdf(){
	   // $flights = Reservation::all();
	    $pdf = PDF::loadView('reservations/resume');
	    return $pdf->download('resumen.pdf');
    }
}
