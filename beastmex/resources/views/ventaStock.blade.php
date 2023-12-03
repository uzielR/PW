@extends('layouts.plantilla')
@section('titulo','STOCK')
@section('ventasStock')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center p-3">Nueva Venta</h1>

    <div class="container p-5">
        
        @if(session()->has('confirmacion'))
            <script>
                Swal.fire({
                icon: 'success',
                title: '¡Formulario completado!',
                text: '{{ session('confirmacion') }}',
                });
            </script>
        @endif
       
        <form method="POST" action="/GuardarVenta">
            @csrf
            <div class="container card p-4">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Cliente:</label>
                            <input type="text" name="NombreCliente" value="{{old('NombreCliente')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del Cliente">
                            <p class="text-primary">{{$errors->first('NombreCliente')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Apellido Paterno:</label>
                            <input type="text" name="ApellidoPaterno" value="{{old('ApellidoPaterno')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Apellido Paterno">
                            <p class="text-primary">{{$errors->first('ApellidoPaterno')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Apellido Materno:</label>
                            <input type="text" name="ApellidoMaterno" value="{{old('ApellidoMaterno')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Apellido Materno">
                            <p class="text-primary">{{$errors->first('ApellidoMaterno')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="producto" class="col-form-label">Nombre del Producto:</label>
                            <select name="NombreProducto" class="form-control" id="producto">
                                <option value="">Seleccione un producto</option>
                                @foreach ($productos as $producto)
                                    <option value="{{ $producto->idProducto }}">{{ $producto->NombreProducto }}</option>
                                @endforeach
                            </select>
                            <p class="text-primary">{{$errors->first('NombreProducto')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Marca:</label>
                            <input type="text" name="Marca5" value="{{old('Marca5')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Marca">
                            <p class="text-primary">{{$errors->first('Marca5')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                            <input type="text" name="Cantidad5" value="{{old('Cantidad5')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Cantidad">
                            <p class="text-primary">{{$errors->first('Cantidad5')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio del Producto:</label>
                            <input type="text" name="Precio5" value="{{old('Precio5')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Precio del Producto">
                            <p class="text-primary">{{$errors->first('Precio5')}}</p>
                        </div>
                    </div>
                </div>
                <div class="text-center p-1 gap-5">
                    <button class="btn btn-primary" type="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                        <path d="M11 2H9v3h2V2Z"/>
                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                    </svg> Guardar Cambios</button>
                    <a href="/ventas" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                      </svg> Regresar</a>
                </div>
            </div>
            
        </form>
    </div>

@endsection