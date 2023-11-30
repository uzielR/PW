{{-- @extends('layouts.plantilla')
@section('titulo', 'almaceneditar')
@section('almaceneditar')
    
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">  
    <h1 class="display-1 text-shadow text-center p-5">Editar</h1>
    
    <!-- Container de Registro Formulario gerencia -->
    <div class="card shadow container py-5 p-5 ">
        <script>
            @if(session()->has('confirmacion'))
                Swal.fire({
                icon: 'success',
                title: '¡Formulario completado!',
                text: '{{ session('confirmacion') }}',
                });
            @endif
        </script>
        <form method="POST" action="/editaralmacen">
            @csrf
            <div class="row py-2">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Nombre del Producto:</label>
                        <input type="text" value="{{old('NombreProducto')}}" class="form-control" name="NombreProducto" placeholder="Ingrese el Nombre del Producto">
                        <p class="text-primary">{{$errors->first('NombreProducto')}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" >Nombre de la Marca:</label>
                        <input type="text" value="{{old('Marca')}}" class="form-control" name="Marca" placeholder="Ingrese el Nombre de la Marca">
                        <p class="text-primary">{{$errors->first('Marca')}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Cantidad:</label>
                        <input type="text" value="{{old('Cantidad')}}" class="form-control" name="Cantidad" placeholder="Ingrese la Cantiad">
                        <p class="text-primary">{{$errors->first('Cantidad')}}</p>
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label" >Costo del Producto:</label>
                        <input type="text" value="{{old('CostoProducto')}}" class="form-control" name="CostoProducto" placeholder="Ingrese el Costo del Producto">
                        <p class="text-primary">{{$errors->first('CostoProducto')}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Fecha de Ingreso:</label>
                        <input type="text" value="{{ old('FechaIngreso', $fecha) }}" class="form-control" name="FechaIngreso" placeholder="Ingrese la Fecha de Ingresos del Producto">
                       <p class="text-primary">{{$errors->first('FechaIngreso')}}</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label class="form-label">Selecciona una foto:</label>
                        <input type="file" value="{{old('Foto')}}" class="form-control" name="Foto" placeholder="Ingrese la Fecha de Ingresos del Producto">
                        <p class="text-primary">{{$errors->first('Foto')}}</p>
                    </div>
                </div>
            </div>
            <div class="row py-2">
                <div class="col gap-2 text-center">
                    <button class="btn btn-primary" type="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                        <path d="M11 2H9v3h2V2Z"/>
                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                    </svg> Guardar Cambios</button>
                    <a href="/almacen" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                      </svg> Regresar</a>
                </div> <!-- cierra botón submit -->
            </div>
        </form>
    </div> 
    
@endsection
 --}}