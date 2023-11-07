@extends('layouts.plantilla')
@section('titulo','Gerencia')
@section('gerenciaRegistro')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
  <h1 class="display-1 text-center "> Gerencia </h1>

  <div class="row p-4">
    <div class="col-md-3 ">
      <!-- Consultar registros usuario botón -->
      <div class="botonSuperior" style="padding-left:100px">
        <form method="get" action="{{ route('apodoUsuarios') }}">
          <button class="btn btn-primary" type="submit" style="width: 200px;"><i class="bi bi-people-fill"></i> Consultar
            Usuarios</button>
        </form>
      </div>
    </div>

    <div class="col-md-3 ">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          Graficas
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="/ventasGrafica">Ventas</a></li>
          <li><a class="dropdown-item" href="/comprasGrafica">Compras</a></li>
          <li><a class="dropdown-item" href="/gananciasGrafica">Ganancias</a></li>
        </ul>
      </div>
    </div>
  </div>

  {{-- formuario --}}
  <div class="card shadow container p-5">
    <script>
      @if (session() -> has('success'))
        Swal.fire({
          icon: 'success',
          title: '¡Formulario completado!',
          text: '{{ session('success') }}',
        });
      @endif
    </script>
    <form method="POST" action="/guardargerenciaRegistro">
      @csrf
      <div class="row py-4">
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Nombre de la Empresa:</label>
            <input type="text" value="{{old('Empresa2')}}" class="form-control" name="Empresa2"
              placeholder="Ingrese el Nombre de la Empresa">
            <p class="text-primary">{{$errors->first('Empresa2')}}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Nombre:</label>
            <input type="text" value="{{old('Nombre2')}}" class="form-control" name="Nombre2"
              placeholder="Ingrese el Nombre">
            <p class="text-primary">{{$errors->first('Nombre2')}}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Apellido Paterno:</label>
            <input type="text" value="{{old('app')}}" class="form-control" name="app"
              placeholder="Ingrese el Apellido Paterno">
            <p class="text-primary">{{$errors->first('app')}}</p>
          </div>
        </div>
      </div>
      <div class="row py-2">
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Apellido Materno:</label>
            <input type="text" value="{{old('apm')}}" class="form-control" name="apm"
              placeholder="Ingrese el Apellido Materno">
            <p class="text-primary">{{$errors->first('apm')}}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Correo:</label>
            <input type="text" value="{{ old('correo3') }}" class="form-control" name="correo3"
              placeholder="Ingrese la Fecha de Ingrese el Correo">
            <p class="text-primary">{{$errors->first('correo3')}}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Area:</label>
            <input type="text" value="{{old('area2')}}" class="form-control" name="area2"
              placeholder="Ingrese la Area en la que Pertenece">
            <p class="text-primary">{{$errors->first('area2')}}</p>
          </div>
        </div>
      </div>
      {{--  --}}
      <div class="row py-2">
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Puesto:</label>
            <input type="text" value="{{old('Puesto2')}}" class="form-control" name="Puesto2"
              placeholder="Ingrese el puesto">
            <p class="text-primary">{{$errors->first('Puesto2')}}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Contraseña:</label>
            <input type="text" value="{{ old('Contraseña2') }}" class="form-control" name="Contraseña2"
              placeholder="Ingrese la Contraseña">
            <p class="text-primary">{{$errors->first('Contraseña2')}}</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="mb-3">
            <label class="form-label">Validar Contraseña:</label>
            <input type="text" value="{{old('Contraseña3')}}" class="form-control" name="Contraseña3"
              placeholder="Ingrese nuevamente la Contraseña">
            <p class="text-primary">{{$errors->first('Contraseña3')}}</p>
          </div>
        </div>
      </div>
      <div class="row py-2">
        <div class="col gap-2 text-center">
          <button class="btn btn-primary" type="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
              <path d="M11 2H9v3h2V2Z" />
              <path
                d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z" />
            </svg> Guardar Cambios</button>
          <a href="/almacen" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg
              xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-arrow-return-left" viewBox="0 0 16 16">
              <path fill-rule="evenodd"
                d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
            </svg> Regresar</a>
        </div> <!-- cierra botón submit -->
      </div>
    </form>
  </div>
@endsection