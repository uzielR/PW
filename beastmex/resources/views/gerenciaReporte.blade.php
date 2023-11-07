@extends('layouts.plantilla')
@section('titulo','Reportes')
@section('reportes')

<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
<h1 class="display-1 text-center p-4"> Reportes </h1>
<!-- Regresar botón -->
<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
</div>

<div class="botonSuperior" style="padding-left: 200px;">
  <form method="get" action="{{ route('apodoGerencia') }}">
    <button class="btn btn-primary" type="submit" style="width: 200px;">Regresa a gerencia</button>
  </form>
</div>


<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button"
      role="tab" aria-controls="home-tab-pane" aria-selected="true">Ventas</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button"
      role="tab" aria-controls="profile-tab-pane" aria-selected="false">Compras</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button"
      role="tab" aria-controls="contact-tab-pane" aria-selected="false">Ganancias</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="disabled-tab" data-bs-toggle="tab" data-bs-target="#disabled-tab-pane" type="button"
      role="tab" aria-controls="disabled-tab-pane" aria-selected="false" disabled></button>
  </li>
</ul>
</div>

  <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...
  </div>
  <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">...
  </div>
  


@endsection