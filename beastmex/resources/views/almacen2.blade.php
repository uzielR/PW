@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h2 class="display-1 text-center">Registro</h2>
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>

    <div class="container">
        <div class="card container p-4">
            <script>
                @if(session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: '{{ session('success') }}',
                    });
                @endif
            </script>
            <form method="POST" action="/guardarRegistro">
                @csrf
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" value="{{old('Nombre_Producto')}}" name="Nombre_Producto" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del Producto">
                            <p class="text-primary">{{$errors->first('Nombre_Producto')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre de la Marca:</label>
                            <input type="text" value="{{old('Nombre_Marca')}}" name="Nombre_Marca" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre de la Marca">
                            <p class="text-primary">{{$errors->first('Nombre_Marca')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Costo del Producto:</label>
                            <input type="text" value="{{old('Costo_Producto')}}" name="Costo_Producto" class="form-control" id="recipient-name" placeholder="Ingrese el Costo del Producto" >
                            <p class="text-primary">{{$errors->first('Costo_Producto')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 py-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fecha de Ingreso:</label>
                            <input type="text" value="{{ old('Fecha_ingreso', $fecha) }}" name="Fecha_ingreso" class="form-control" id="recipient-name">
                            <p class="text-primary">{{$errors->first('Fecha_ingreso')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                            <input type="text" value="{{old('Precio_Venta')}}" name="Precio_Venta" class="form-control" id="recipient-name" placeholder="Ingrese el Precio Venta del Producto">
                            <p class="text-primary">{{$errors->first('Precio_Venta')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Foto:</label>
                            <input type="file" value="{{old('Foto2')}}" name="Foto2" class="form-control" id="recipient-name">
                            <p class="text-primary">{{$errors->first('Foto2')}}</p>
                        </div>
                    </div>
                    <div class="d-grid gap-5">
                        <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2V2Z"/>
                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                            </svg> Guardar Registro</button>
                    </div>
                </div>
            </form>
        </div>
            
    
    </div>

@endsection