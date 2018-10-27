<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
	         .bg-image{
	         color: white;
	         background: url("{{asset("media/banner.jpg")}}") center no-repeat ;
	         height: 300px;
	         }
	         .bg-mycolor{
	         background-color: rgba(0, 0, 0, 0.5);
	         }
	         .bg-card-poptun{
	         background: url("{{asset("media/poptun.jpg")}}") center no-repeat;
	         }
	         .bg-card-elena{
	         background: url("{{asset("media/santa-elena.gif")}}") center no-repeat;
	         }
      </style>
   </head>
   <body>
      <div id="app">
         <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
               <a class="navbar-brand" href="{{ url('/') }}" style="color:blue;">
               Linea de Autobuses
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">
				   <li class="nav-item">
                          <a class="nav-link" href="{{ url('servicestab') }}">{{ __('Servicios') }}</a>
                       </li>
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                     <!-- Authentication Links -->

				 <li class="nav-item">
				    <a class="nav-link"  href="{{url('/gallery')}}">Galeria</a>
				 </li>
                     @guest
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesion') }}</a>
                     </li>
                     <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registrarme') }}</a>
                        @endif
                     </li>
                     @else
                     <li class="nav-item">
                        <a  class="nav-link"
				    href="{{url('create')}}" >Reservación</a>
                     </li>
                     @endguest
                  </ul>
               </div>
            </div>
         </nav>
         <main class="py-4">
            @yield('content')
         </main>
      </div>
   </body>
</html>
