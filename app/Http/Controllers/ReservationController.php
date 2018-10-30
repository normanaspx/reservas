<?php

namespace App\Http\Controllers;

//Models
use App\Models\ReservationDetail;
use App\Models\Reservation;
use App\Models\Seat;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
	public function __construct()
	{
	    $this->middleware('auth');
	}
    public function store(request $request){
	   // dd($request);
		$reservation = new Reservation();
		$reservation->id=$request->id;
		$reservation->ID_SERVICIO=$request->id_servicio;
		$reservation->fecha=now();
		$reservation->save();
		$id=$reservation->ID_RESERVA;
		$arr=$request->asientos;
		for ($i=0; $i < count($arr); $i++) {
			$seat[$i] = new Seat();
			$seat[$i]->ASIENTO = $request->asientos[$i];
			$seat[$i]->Estado = 'Ocupado';
			$seat[$i]->save();

			$detail[$i] = new ReservationDetail();
			$detail[$i]->ID_RESERVA=$id;
			$detail[$i]->ID_ASIENTO = $seat[$i]->ID_ASIENTO;
			$detail[$i]->save();
		}
	    return redirect()->route('home');
    }
}
