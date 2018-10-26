
<table class="table table-striped table-sm" id="especial">

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
	    <tr onclick="myFunction(this)">
		   <td id="id_service"> {{$service->ID_SERVICIO}}</td>
		   <td id="nombre"> {{$service->NOMBRE}}</td>
		   <td id="origen"> {{$service->ORIGEN}}</td>
		   <td id="destino"> {{$service->DESTINO}}</td>
		   <td id="precio"> {{number_format($service->PRECIO, 2)}}</td>
		   <td id="horario"> {{$service->HORARIO_SALIDA}}</td>
		   <td><a href="#">Seleccionar</a></td>
	    </tr>
	@empty
	    <p>NO HAY SERVICIOS DEFINIDOS</p>
	@endforelse
	</tbody>
  </table>
