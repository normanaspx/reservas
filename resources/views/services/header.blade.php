@section('header')
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
    </style>
</head>
<body>
@stop
