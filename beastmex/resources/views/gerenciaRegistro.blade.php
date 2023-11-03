@extends('layouts.plantilla')
@section('titulo','Gerencia')
@section('gerencia')

<style>
  .custom-container {
    background-color: white; /* Para cambiar el color del contenedor del formulario gerencia */
  }
</style>

<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

<h1 class="display-1 text-center text-black"> Gerencia </h1>

<!-- Consultar registros botón -->
<div class="botonSuperior" style= "padding-left: 200px;">
  <form method="get" action="{{ route('apodogerencia') }}">
    <button class="btn btn-primary" type="submit" style="width: 200px;">Consultar Registros</button>
  </form>
</div>

<!-- Container de Registro Formulario gerencia -->
<div class="container rounded text-center mt-5 mb-5 p-4 custom-container">
  <form>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Nombre</label>
          <input type="text" class="form-control" name="txtName">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Apellido paterno</label>
          <input type="text" class="form-control" name="txtApellidoPaterno">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Apellido materno</label>
          <input type="text" class="form-control" name="txtApellidoMaterno">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Correo</label>
          <input type="text" class="form-control" name="txtEmail">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Area</label>
          <input type="text" class="form-control" name="txtArea">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Jefe directo</label>
          <input type="text" class="form-control" name="txtJefe">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Puesto</label>
          <input type="text" class="form-control" name="txtPuesto">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Contraseña</label>
          <input type="text" class="form-control" name="txtContraseña">
        </div>
      </div>
      <div class="col-md-4">
        <div class="mb-3">
          <label class="form-label">Valida contraseña</label>
          <input type="text" class="form-control" name="txtValidaContraseña">
        </div>
      </div>
    </div>

  <div class="d-flex text-center">
      <button class="btn btn-primary" type="submit" style="width: 200px;">Guardar</button>

  </div> <!-- cierra botón submit -->

</div> <!-- cierra contenedor Registro Formulario gerencia -->
@endsection