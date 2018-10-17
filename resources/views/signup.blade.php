<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="">
		<title></title>
		<link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
		<style media="screen">
			.bg-image{
				.background-color: rgba(0, 0, 0, 0.5);
			}
		</style>
	</head>
	<body>
		<div class="container">
			<form class="bg-image" method="post" action="{{url('/signup')}}">
				{{ csrf_field() }}
				<div class="jumbotron jumbotron-fluid">
				  <div class="container">
				    <h1 class="display-4">Crear cuenta</h1>
				    <p class="lead"></p>
				  </div>
				</div>
				<div class="form-row">
				  <div class="form-group col-md-3">
				    <label for="inputName1">Nombres</label>
				    <input type="text" name="names" class="form-control" id="inputName1" placeholder="" autofocus>
				  </div>
				  <div class="form-group col-md-3">
				    <label for="inputApellido1">Apellidos</label>
				    <input type="text" name="second_name" class="form-control" id="inputApellido1" placeholder="" autofocus>
				  </div>
				  <div class="form-group col-md-3">
					  <label for="inputDate">Fecha de nacimiento</label>
					  <input type="date" name="birthday_date" class="form-control" id="inputDate" placeholder="">
				  </div>
				  <div class="form-group col-md-3 text-center align-items-center">
					  <label for="inputDate">Genero</label><br>
					  <div class="custom-control custom-radio custom-control-inline">
					    <input type="radio" id="customRadio1" name="customRadio" value="masculino" class="custom-control-input">
					    <label class="custom-control-label" for="customRadio1">Masculino</label>
					  </div>
					  <div class="custom-control custom-radio custom-control-inline">
					    <input type="radio" id="customRadio2" name="customRadio" value="femenino" class="custom-control-input">
					    <label class="custom-control-label" for="customRadio2">Femenino</label>
					  </div>
				  </div>
				</div>
				  <div class="form-row">

					  <div class="form-group col-md-2">
						  <label for="inputDate">Telefono</label>
						  <input type="number" name="cel" class="form-control" id="inputDate" placeholder="">
					  </div>
					  <div class="form-group col-md-2">
						  <label for="inputDate">Nacionalidad</label>
						  <input type="text" name="nationality" class="form-control" id="inputDate" placeholder="">
					  </div>
					  <div class="form-group col-md-3">
						  <label for="inputDate">Correo electronico</label>
						  <input type="email" name="email" class="form-control" id="inputDate" placeholder="">
					  </div>
					  <div class="form-group col-md-2">
						  <label for="inputDate">Contraseña</label>
						  <input type="password" name="password" class="form-control" id="inputDate" placeholder="">
					  </div>
					  <div class="form-group col-md-3">
						  <label for="inputDate">Repetir Contraseña</label>
						  <input type="password" class="form-control" id="inputDate" placeholder="">
					  </div>
				  </div>
			  <button type="submit" class="btn btn-primary">Crear</button>
			  <a class="btn btn-warning text-white" href="{{url('/login')}}">Volver</a>
			</form>
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
