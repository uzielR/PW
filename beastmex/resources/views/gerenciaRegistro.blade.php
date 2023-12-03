@extends('layouts.plantilla')
@section('titulo','Gerencia')
@section('gerenciaRegistro')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
  <h1 class="display-1 text-center "> Gerencia Registro </h1>

  <div class="row p-4">
    <div class="col-md-3 ">
      <!-- Consultar registros usuario botón -->
      <div class="botonSuperior" style="padding-left:100px">
         <a class="btn btn-primary" href="gerencia.vista" type="submit" style="width: 200px;"><i class="bi bi-people-fill"></i> Consultar
            Usuarios</button>
          </a>

      </div>
    </div>

    <div class="col-md-3 ">

    </div>
  </div>

  {{-- formuario --}}
  <div class="card shadow container p-5"> <!-- INICIA CARD container -->
    <script>
      @if (session() -> has('success'))
        Swal.fire({
          icon: 'success',
          title: '¡Formulario completado!',
          text: '{{ session('success') }}',
        });
      @endif
    </script>
    <form method="POST" action="/GuardarRegistroUsuario">
      @csrf
      <div class="row py-4"> <!-- Inicia fila UNO formulario con 3 campos -->

        <div class="col-md-4"> <!-- inicio campo datos uno (1.1) -->
            <!--<div class="mb-3">
                  <label class="form-label">Área del usuario:</label>
                    <input type="text" value="{{old('Empresa2')}}" class="form-control" name="Empresa2"
                      placeholder="Área de trabajo del usuario">
                    <p class="text-primary">{{$errors->first('Empresa2')}}</p>
                </div> -->
          <div class="mb-3">
            <label class="form-label"> Área del usuario:</label>
                  <span class="ms-2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                          <path d="M2 6l6 6 6-6" />
                      </svg>
                  </span>
            <select class="form-control" name="txtAreaUsuario">
                <option value="#" {{ old('txtAreaUsuario') == '#' ? 'selected' : '' }}> >> De click para elegir una opción <<</option>
                <option value="Almacen" {{ old('txtAreaUsuario') == 'Almacen' ? 'selected' : '' }}>Almacen</option>
                <option value="Ventas" {{ old('txtAreaUsuario') == 'Ventas' ? 'selected' : '' }}>Ventas</option>
                <option value="Compras" {{ old('txtAreaUsuario') == 'Compras' ? 'selected' : '' }}>Compras</option>
                <option value="Gerencia" {{ old('txtAreaUsuario') == 'Gerencia' ? 'selected' : '' }}>Gerencia</option>
            </select>
            <p class="text-primary">{{$errors->first('txtAreaUsuario')}}</p>
          </div>

        </div>  <!-- termino campo datos uno (1.1) -->


        <div class="col-md-4">  <!-- campo datos dos (1.2) -->
          <div class="mb-3">
            <label class="form-label">Apellido paterno:</label>
            <input type="text" value="{{old('txtApellidoPaternoUsuario')}}" class="form-control" name="txtApellidoPaternoUsuario"
              placeholder="Ingrese apellido paterno del usuario">
            <p class="text-primary">{{$errors->first('txtApellidoPaternoUsuario')}}</p>
          </div>
        </div>

        <div class="col-md-4">  <!-- campo datos tres (1.3) -->
          <div class="mb-3">
            <label class="form-label">Apellido materno:</label>
            <input type="text" value="{{old('txtApellidoMaternoUser')}}" class="form-control" name="txtApellidoMaternoUser"
              placeholder="Ingrese apellido materno del usuario">
            <p class="text-primary">{{$errors->first('txtApellidoMaternoUser')}}</p>
          </div>
        </div>

      </div> <!-- Termina fila UNO formulario -->

      <div class="row py-2"> <!-- Inicia fila DOS formulario con 3 campos-->

        <div class="col-md-4">  <!-- campo datos uno (2.1) -->
          <div class="mb-3">
            <label class="form-label">Nombre(s):</label>
            <input type="text" value="{{old('txtNombreUsuario')}}" class="form-control" name="txtNombreUsuario"
              placeholder="Ingrese nombre(s) del usuario">
            <p class="text-primary">{{$errors->first('txtNombreUsuario')}}</p>
          </div>
        </div>

        <div class="col-md-4">  <!-- campo datos uno (2.2) -->
          <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="text" value="{{ old('txtemailUsuario') }}" class="form-control" name="txtemailUsuario"
              placeholder="ejemplo: almacen.juan.perez@beastmex.com">
            <p class="text-primary">{{$errors->first('txtemailUsuario')}}</p>
          </div>
        </div>

        <!-- No se ocupa porque ya esta área -->
          <div class="col-md-4">   <!-- campo datos uno (2.3) -->
            <div class="mb-3">
          <!--<label class="form-label">Area:</label>
              <input type="text" value="{{old('area2')}}" class="form-control" name="area2"
                placeholder="# no se ocupa"> -->
              <p class="text-primary">{{$errors->first('area2')}}</p>
            </div>
          </div>
        <!-- No se ocupa porque ya esta área -->

      </div>  <!-- Termina fila DOS formulario -->
      <div class="row py-2">  <!-- Inicia fila TRES formulario con 3 campos-->

        <div class="col-md-4">    <!-- campo datos uno (3.1) -->
          <div class="mb-3">
            <label class="form-label">Puesto:</label>
            <input type="text" value="{{old('txtposicionUsuario')}}" class="form-control" name="txtposicionUsuario"
              placeholder="Ingrese el puesto">
            <p class="text-primary">{{$errors->first('txtposicionUsuario')}}</p>
          </div>
        </div>
        
        <div class="col-md-4">    <!-- campo datos uno (3.2) -->
          <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="password" value="{{ old('txtpasswordUsuario') }}" class="form-control" name="txtpasswordUsuario"
              placeholder="Ingrese la Contraseña">
            <p class="text-primary">{{$errors->first('txtpasswordUsuario')}}</p>
          </div>
        </div>
        <div class="col-md-4">     <!-- campo datos uno (3.3) -->
          <div class="mb-3">
            <label class="form-label">Validar Contraseña:</label>
            <input type="password" value="{{old('txtpasswordUsuario_confirmation')}}" class="form-control" name="txtpasswordUsuario_confirmation"
              placeholder="Ingrese nuevamente la Contraseña">
            <p class="text-primary">{{$errors->first('txtpasswordUsuario_confirmation')}}</p>
          </div>
        </div>
      </div>

      <div class="row py-2">
        <div class="col gap-2 text-center">

          <a href="/gerenciaVistaUsuarios" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
            <i class="bi bi-arrow-return-left"></i> 
              Regresar a lista de usuarios
          </a>
          
          <button class="btn btn-primary" type="submit">
            <i class="bi bi-person-add"></i> 
              Guardar registro de usuario
          </button>

        </div> <!-- cierra botón submit -->
      </div>
    </form>
  </div>  <!-- TERMINA CARD container -->
@endsection



