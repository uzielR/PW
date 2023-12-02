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
                @if(session('confirmacion'))
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: '{{ session('confirmacion') }}',
                    });
                @endif
            </script>
            <form method="POST" action="/GuardarProductos" enctype="multipart/form-data" >
                @csrf
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" value="{{old('NombreProducto')}}" name="NombreProducto" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del Producto">
                            <p class="text-primary">{{$errors->first('NombreProducto')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre de la Marca:</label>
                            <input type="text" value="{{old('NombreMarca')}}" name="NombreMarca" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre de la Marca">
                            <p class="text-primary">{{$errors->first('NombreMarca')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Costo del Producto:</label>
                            <input type="text" value="{{old('CostoProducto')}}" name="CostoProducto" class="form-control" id="recipient-name" placeholder="Ingrese el Costo del Producto" >
                            <p class="text-primary">{{$errors->first('CostoProducto')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 py-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fecha de Ingreso:</label>
                            <input type="text" value="{{ old('Fechaingreso') }}" name="Fechaingreso" class="form-control" id="recipient-name" placeholder="Ingrese la Fecha">
                            <p class="text-primary">{{$errors->first('Fechaingreso')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                            <input type="text" value="{{old('PrecioVenta')}}" name="PrecioVenta" class="form-control" id="recipient-name" placeholder="Ingrese el Precio Venta del Producto">
                            <p class="text-primary">{{$errors->first('PrecioVenta')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="Foto2"class="col-form-label">Selecciona una imagen:</label>
                            <input type="file" value="{{old('ImagenProducto')}}" name="ImagenProducto" id="ImagenProducto"class="form-control" accept="image/*">
                            <p class="text-primary">{{$errors->first('ImagenProducto')}}</p>
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