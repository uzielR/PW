@extends('layouts.plantilla')
@section('titulo','Editar registro usuario')
@section('gerenciaEditarUsuario')

<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
  <!-- Container de Registro Formulario gerencia -->
  <div class="container card rounded text-center mt-5 mb-5 p-4 custom-container">
    <form>
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" class="form-control" name="txtName" placeholder="Ingrese el Nombre">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Apellido paterno:</label>
            <input type="text" class="form-control" name="txtApellidoPaterno" placeholder="Ingrese el Apellido Paterno">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Apellido materno:</label>
            <input type="text" class="form-control" name="txtApellidoMaterno" placeholder="Ingrese el Apellido Materno">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="text" class="form-control" name="txtEmail" placeholder="Ingrese el Correo Electronico">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Area:</label>
            <input type="text" class="form-control" name="txtArea" placeholder="Ingrese el Area">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Puesto</label>
            <input type="text" class="form-control" name="txtPuesto" placeholder="Ingrese la posicion">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="txtContraseña" placeholder="Ingrese la Contraseña">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Valida contraseña</label>
            <input type="password" class="form-control" name="txtValidaContraseña" placeholder="Ingrese Nuevamente la Contraseña ">
          </div>
        </div>
      </div>

      <div class="d-grid text-center">
        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
          <path d="M11 2H9v3h2V2Z"/>
          <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
          </svg> Guardar</button>

      </div> <!-- cierra botón submit -->

    </form>

  </div> <!-- cierra contenedor Registro Formulario gerencia -->
  @endsection
