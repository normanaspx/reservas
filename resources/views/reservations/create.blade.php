@extends('layout')
@section('content-title',"Nueva reserva")
@section('css-template')
@parent
<link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
<style media="screen">
   .border-top{
   margin-top: 10px;
   }
</style>
@endsection
@section('content-header-buttons')
<div class="btn-toolbar mb-2 mb-md-0">
   <div class="btn-group mr-2">
      <a class="btn btn-sm btn-outline-secondary" href="#">
      <span data-feather="arrow-left-circle"></span>
      Cancelar
      </a>
   </div>
</div>
@endsection
@section('content')
<div class="row" id="tables">
   <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item">
         <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Autobuses especiales</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Autobuses regulares</a>
      </li>
      <li class="nav-item">
         <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Autobuses Oro</a>
      </li>
   </ul>
   <div class="tab-content" id="myTabContent">
      <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
         <div class="row">
            <div class="container border-top">
			 <!--Solo me sirve para ordenar mi codigo en secciones-->
               @include('reservations.special')
            </div>
         </div>
      </div>
      <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
         <div class="border-top">
            @include('reservations.regular')
         </div>
      </div>
      <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
         <div class="border-top">
            @include('reservations.gold')
         </div>
      </div>
   </div>
</div>
<br>
<div class="row" id="seats">
	@include('reservations.seats')
</div>
@endsection

@section('scripts')
	@include('reservations.js.scripts')
@endsection
