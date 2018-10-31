<table class="table table-striped table-sm" id="regular">

   <thead>
   <tr>
	  <th>#</th>
	  <th>Nombre</th>
	  <th>Origen</th>
	  <th>Destino</th>
	  <th>Precio</th>
	  <th>Horario</th>
	  <th>Acciones</th>
   </tr>
   </thead>
   <tbody>

   @forelse($regular_service as $service)
	  <tr onclick="myFunction1(this)">
		 <td id="id_service"> {{$service->ID_SERVICIO}}</td>
		 <td id="nombre"> {{$service->NOMBRE}}</td>
		 <td id="origen"> {{$service->ORIGEN}}</td>
		 <td id="destino"> {{$service->DESTINO}}</td>
		 <td id="precio"> {{number_format($service->PRECIO, 2)}}</td>
		 <td id="horario"> {{$service->HORARIO_SALIDA}}</td>
		 <td> <a href="#">Seleccionar</a></td>
	  </tr>
   @empty
	  <p>NO HAY SERVICIOS DEFINIDOS</p>
   @endforelse
   </tbody>
  </table>
