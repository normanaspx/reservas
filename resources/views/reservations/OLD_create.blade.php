@extends('layout')
@section('content-title',"Nueva reserva")
@section('css-template')
@parent
<link href="{{asset("css/form-validation.css")}}" rel="stylesheet">
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
<div class="row">
<ul class="nav nav-tabs" id="myTab" role="tablist">
   <li class="nav-item">
      <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Autoobuses especiales</a>
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
      Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
   </div>
   <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
   <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
</div>
<form class="needs-validation" method="POST" action="#">
   {{csrf_field()}}
   <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>
      @endforeach
   </ul>
   <!--
      <div class="col-6 mb-3">
          <label for="code">Código</label>
          <input type="text" class="form-control" id="code" name="code" required>
      </div>
      <div class="col-6 mb-3">
          <label for="description">Descripción</label>
          <input type="text" class="form-control" id="description" name="description" required>
      </div>
      </div>
      <div class="row">
      <div class="col-6"></div>
      <div class="col-12">
          <button class="btn btn-sm btn-outline-secondary">
              <span data-feather="save"></span>
              Guardar
          </button>
      </div>
      </div>-->
</form>
@endsection
