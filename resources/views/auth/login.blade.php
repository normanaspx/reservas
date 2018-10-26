<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Linea de Autobuses</title>
      <!-- Scripts -->
      <script src="{{ asset('js/app.js') }}" defer></script>
      <!-- Fonts -->
      <link rel="dns-prefetch" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
      <!-- Styles -->
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Bootstrap core CSS -->
      <link href="{{asset("css/bootstrap.min.css")}}" rel="stylesheet">
      <!-- Custom styles for this template -->
      @yield('css-template')
      <link href="{{asset("css/pricing.css")}}" rel="stylesheet">
      @show
      <style media="screen">
         html{
         background: url("{{asset("media/fondo.jpg")}}") no-repeat center center fixed;
         background-size: cover;
         }
         body{
         background: none;
         }
	    .card{
		    background-color: rgba(0, 0, 0, 0.5);
		    color: white;
		    margin-top: 10%;
	    }
      </style>
   </head>
   <body>
      <div id="app">
         <main class="py-4">
            <div class="container">
               <div class="row justify-content-center">
                  <div class="col-md-8">
                     <div class="card">
                        <div class="card-header">{{ __('Iniciar sesion') }}</div>
                        <div class="card-body">
                           <form method="POST" action="{{ route('login') }}">
                              @csrf
                              <div class="form-group row">
                                 <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                 <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                 </div>
                              </div>
                              <div class="form-group row">
                                 <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                 <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                 </div>
                              </div>
                              <div class="form-group row mb-0">
                                 <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesion') }}
                                    </button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </main>
      </div>
   </body>
</html>
