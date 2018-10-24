@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid bg-image">
	   <div class="container bg-mycolor">
		 <h1 class="display-4">Linea de autobuses</h1>
		 <p class="lead">Con más de 50 años de brindar nuestros servicios en Guatemala.</p>
	   </div>
	</div>
	<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
	   <h1 class="display-4">Quienes somos</h1>
	   <p class="lead" id="quienes"><br>Somos Línea de Autobuses una empresa especializada en el
		 servicio de transportación de pasajeros, con más de 50 años de brindar
		 nuestros servicios en Guatemala, nos dedicamos a brindar servicio a las
		 personas tanto nacionales y extranjeros que desean visitar el
		 departamento de Petén, teniendo como lugar de origen  oficinas
		 centrales de la línea de autobuses Ciudad Guatemala Zona 1 o Centra
		 Norte Zona 18 y lugar de destino las oficinas de la línea de autobuses
		 en Poptún o Santa Elena, Petén Guatemala y viceversa.
	   </p>
	</div>
	<br>
	@yield('modal-content')
	<div class="container">
	   <h2 class="text-center">Destinos</h2>
	   <hr>
	   <div class="card-group">
		 <div class="card">
		    <img class="card-img-top" src="media/santa-elena.gif" alt="Card image cap">
		    <div class="card-body">
			  <h5 class="card-title">Santa Elena, Petén</h5>
			  <p class="card-text">Es una ciudad del departamento de Petén,
				que se fue formando como una aglomeración urbana de la isla de
				Ciudad Flores localizada en la isla del Lago Petén Itzá
				. Santa Elena de la Cruz está unida a Flores por un puente sobre el lago Petén Itzá.
			  </p>
			  <p class="card-text"><small class="text-muted"><a href="{{url('/departure')}}">Ver horarios</a></small></p>
		    </div>
		 </div>
		 <div class="card">
		    <img class="card-img-top " src="media/poptun.jpg" alt="Card image cap">
		    <div class="card-body">
			  <h5 class="card-title">Póptun, Petén</h5>
			  <p class="card-text">Es un municipio en el departamento de Petén, en la República de Guatemala.
				Es el segundo municipio más poblado del departamento y tiene frontera con Belice.
			  </p>
			  <p class="card-text"><small class="text-muted"><a href="{{url('/departure')}}">Ver horarios</a></small></p>
		    </div>
		 </div>
	   </div>
	   <footer class="pt-4 my-md-5 pt-md-5 border-top">
		 <div class="row">
		    <div class="col-12 col-md">
			  <img class="mb-2" src="../../assets/brand/bootstrap-solid.svg" alt="" width="24" height="24">
			  <small class="d-block mb-3 text-muted">&copy; 2017-2018</small>
		    </div>
		    <div class="col-6 col-md">
			  <h5>Features</h5>
			  <ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Cool stuff</a></li>
			  </ul>
		    </div>
		    <div class="col-6 col-md">
			  <h5>Resources</h5>
			  <ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Resource</a></li>
			  </ul>
		    </div>
		    <div class="col-6 col-md">
			  <h5>About</h5>
			  <ul class="list-unstyled text-small">
				<li><a class="text-muted" href="#">Team</a></li>
			  </ul>
		    </div>
		 </div>
	   </footer>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	   <div class="modal-dialog" role="document">
		 <div class="modal-content">
		    <div class="modal-header">
			  <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
			  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			  </button>
		    </div>
		    <div class="modal-body">
			  <label for="">Whatsapp: 52914919</label>
		    </div>
		    <div class="modal-footer">
			  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
			  <!--<button type="button" class="btn btn-primary">Save changes</button>-->
		    </div>
		 </div>
	   </div>
	</div>
	<script
	   src="https://code.jquery.com/jquery-3.3.1.js"
	   integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	   crossorigin="anonymous"></script>
	<script>window.jQuery || document.write('<script src="{{asset("js/jquery-slim.min.js")}}"><\/script>')</script>
	<script src="{{asset("js/popper.min.js")}}"></script>
	<script src="{{asset("js/bootstrap.min.js")}}"></script>
@endsection
