<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index(){
		$special_service = DB::table('servicio')
		->join('detalle_servicio', 'servicio.ID_DETALLE_SERVICIO', '=', 'DETALLE_SERVICIO.ID_DETALLE_SERVICIO')
		->select('ID_SERVICIO', 'NOMBRE', 'ORIGEN', 'DESTINO', 'HORARIO_SALIDA', 'PRECIO')
		->where('NOMBRE', '=', 'Autobuses Especiales')
		->orderBy('NOMBRE')
		->get();

		// -> dd que muestre el valor de $special_service
		//dd($regular_service);

		$gold_service = DB::table('servicio')
		->join('detalle_servicio', 'servicio.ID_DETALLE_SERVICIO', '=', 'DETALLE_SERVICIO.ID_DETALLE_SERVICIO')
		->select('ID_SERVICIO', 'NOMBRE', 'ORIGEN', 'DESTINO', 'HORARIO_SALIDA', 'PRECIO')
		->where('NOMBRE', '=', 'Clase oro')
		->orderBy('NOMBRE')
		->get();

		$regular_service = DB::table('servicio')
		->join('detalle_servicio', 'servicio.ID_DETALLE_SERVICIO', '=', 'DETALLE_SERVICIO.ID_DETALLE_SERVICIO')
		->select('ID_SERVICIO', 'NOMBRE', 'ORIGEN', 'DESTINO', 'HORARIO_SALIDA', 'PRECIO')
		->where('NOMBRE', '=', 'Clase regular')
		->orderBy('NOMBRE')
		->get();

		//Me va a retornar una vista y el compact me envia variables a traves de esa vista
		return view('reservations.create', compact('regular_service', 'gold_service', 'special_service'));
    }
}
