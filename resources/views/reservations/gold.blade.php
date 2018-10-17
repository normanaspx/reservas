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

   @forelse($gold_service as $service)
	  <tr>
		 <td> {{$service->ID_SERVICIO}}</td>
		 <td> {{$service->NOMBRE}}</td>
		 <td> {{$service->ORIGEN}}</td>
		 <td> {{$service->DESTINO}}</td>
		 <td> {{number_format($service->PRECIO, 2)}}</td>
		 <td> {{$service->HORARIO_SALIDA}}</td>
		 <td> <a href="#">Selccionar</a></td>
	  </tr>
   @empty
		<div class="row">
			<div class="col sm-12 md-12 lg-12">
				<div class="border-top">
					<p>NO HAY SERVICIOS DEFINIDOS</p>
				</div>
			</div>
		</div>
   @endforelse
   </tbody>
  </table>
