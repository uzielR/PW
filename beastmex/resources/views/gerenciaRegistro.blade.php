@extends('layouts.plantilla')
@section('titulo','Gerencia')
@section('gerencia')

  <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">  
  <h1 class="display-1 text-center"> Gerencia </h1>

  <!-- Container de Registro Formulario gerencia -->
  <div class="card container py-4 p-5">
    <form>
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
              <label class="form-label">Nombre</label>
              <input type="text" class="form-control" name="txtName" aria-placeholder="Ingrese el nombte">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
              <label class="form-label" >Apellido paterno</label>
              <input type="text" class="form-control" name="txtApellidoPaterno" aria-placeholder="Ingrese el Apellido Paterno">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
              <label class="form-label">Apellido materno</label>
              <input type="text" class="form-control" name="txtApellidoMaterno" placeholder="Ingrese el Area">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="mb-3">
              <label class="form-label" >Correo</label>
              <input type="text" class="form-control" name="txtEmail" placeholder="Ingrese el Area">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
              <label class="form-label">Area</label>
              <input type="text" class="form-control" name="txtArea" placeholder="Ingrese el Area">
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
              <label class="form-label" >Jefe directo</label>
              <input type="text" class="form-control" name="txtJefe" placeholder="Ingrese el nombre del Fefe">
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
      <div class="row py-2">
        <div class="col gap-2 text-center">
            <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                <path d="M11 2H9v3h2V2Z"/>
                <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
              </svg> Guardar Registro</a>
            <a href="#" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
              </svg> Consultar Registros</a>
        </div> <!-- cierra botón submit -->
    </div>
    </form>
  </div> <!-- cierra contenedor Regist
@endsection