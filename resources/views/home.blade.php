
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    @yield('css-template')
        <link href="{{asset("css/pricing.css")}}" rel="stylesheet">
    @show
</head>

<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <h5 class="my-0 mr-md-5 font-weight-normal">Linea de autobuses</h5>
	 <a class=" my-0 mr-md-5" href="#">Quienes somos</a>
	 <a class="my-0 mr-md-auto text-dark" href="#">Servicios</a>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">Galeria</a
          <a class="p-2 text-dark" href="#">Reservaciones</a>
            <a class="p-2 text-dark" href="#">Contacto</a>
      </nav>
      <a class="btn btn-outline-primary" href="{{url('/login')}}">Iniciar sesion</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Linea de autobuses</h1>
      <p class="lead"><br>Somos Línea de Autobuses una empresa especializada en el
		 servicio de transportación de pasajeros, con más de 50 años de brindar
		  nuestros servicios en Guatemala, nos dedicamos a brindar servicio a las
		   personas tanto nacionales y extranjeros que desean visitar el
		   departamento de Petén, teniendo como lugar de origen  oficinas
		   centrales de la línea de autobuses Ciudad Guatemala Zona 1 o Centra
		   Norte Zona 18 y lugar de destino las oficinas de la línea de autobuses
		   en Poptún o Santa Elena, Petén Guatemala y viceversa.</p>
    </div><br>

    <div class="container">
	    <h2 class="text-center">Servicios</h2>
	    <hr>
      <div class="card-deck mb-3 text-center">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Clase regular</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary">Sign up for free</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Clase oro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
          </div>
        </div>
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">Buses especiales</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">Q145 <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Zona 1 y Centra Norte Zona 18 Guatemala.</li>
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
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
              <li><a class="text-muted" href="#">Random feature</a></li>
              <li><a class="text-muted" href="#">Team feature</a></li>
              <li><a class="text-muted" href="#">Stuff for developers</a></li>
              <li><a class="text-muted" href="#">Another one</a></li>
              <li><a class="text-muted" href="#">Last time</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>Resources</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Resource</a></li>
              <li><a class="text-muted" href="#">Resource name</a></li>
              <li><a class="text-muted" href="#">Another resource</a></li>
              <li><a class="text-muted" href="#">Final resource</a></li>
            </ul>
          </div>
          <div class="col-6 col-md">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

<script>window.jQuery || document.write('<script src="{{asset("js/jquery-slim.min.js")}}"><\/script>')</script>
<script src="{{asset("js/popper.min.js")}}"></script>
<script src="{{asset("js/bootstrap.min.js")}}"></script>
</body>
</html>
