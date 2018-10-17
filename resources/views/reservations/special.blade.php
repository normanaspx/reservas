
<table class="table table-striped table-sm">

	<thead>
	<tr>
	    <th>#</th>
	    <th>Nombre</th>
	    <th>Origen</th>
	    <th>Horario</th>
	    <th>Precio</th>
	    <th>Destino</th>
	    <th>Acciones</th>
	</tr>
	</thead>
	<tbody>

	@forelse($special_service as $service)
	    <tr>
		   <td> {{$service->ID_SERVICIO}}</td>
		   <td> {{$service->NOMBRE}}</td>
		   <td id="holis"> {{$service->ORIGEN}}</td>
		   <td> {{$service->DESTINO}}</td>
		   <td> {{number_format($service->PRECIO, 2)}}</td>
		   <td> {{$service->HORARIO_SALIDA}}</td>
		   <td><a href="#" onclick="test()">Seleccionar</a></td>
	    </tr>
	@empty
	    <p>NO HAY SERVICIOS DEFINIDOS</p>
	@endforelse
	</tbody>
  </table>
