<table class="table table-striped table-sm">

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
	  <tr onclick="myFunction(this)">
		 <td> {{$service->ID_SERVICIO}}</td>
		 <td> {{$service->NOMBRE}}</td>
		 <td> {{$service->ORIGEN}}</td>
		 <td> {{$service->DESTINO}}</td>
		 <td> {{number_format($service->PRECIO, 2)}}</td>
		 <td> {{$service->HORARIO_SALIDA}}</td>
		 <td> <a href="#">Seleccionar</a></td>
	  </tr>
   @empty
	  <p>NO HAY SERVICIOS DEFINIDOS</p>
   @endforelse
   </tbody>
  </table>
