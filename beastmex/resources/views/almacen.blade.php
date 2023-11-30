@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="display-1 text-center">Productos</h1>
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit" >Buscar </button>
    </form>
    <script>
        @if(session('confirmacion'))
            Swal.fire({
                icon: 'success',
                title: '¡Éxito!',
                text: '{{ session('confirmacion') }}',
            });
        @endif
    </script>
    <div class="card container p-4">
        <div class="card-body container">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-2 p-4">
                        <th>No.Serie</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Costo</th>
                        <th>Precio Venta</th>
                        <th>Fecha Ingreso</th>
                        <th>Foto</th>
                        <th> </th>

                    </tr>
                </thead>
                @foreach ($consR as $item)
                    <tbody>
                        <tr class="text-center p-4 py-2">
                            <th scope="row">{{$item->id }}</th>
                            <td>{{$item->NombreProducto }}</td>
                            <td>{{$item->NombreMarca }}</td>
                            <td>{{$item->CostoProducto }}</td>
                            <td>{{$item->FechaIngreso }}</td>
                            <td>{{$item->PrecioVenta }}</td>
                            {{-- <td>{{$item->ImagenProducto }}</td> --}}
                            <td>
                                @if($item->ImagenProducto)
                                    <img src="{{ asset('imagenes2/' . $item->ImagenProducto) }}" alt="Imagen del Producto" style="max-width: 100px; max-height: 100px;">
                                @endif
                            </td>
                            <td class="col p-2 text-center py-5">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                    Editar
                                </button>
                                <a href="/almacen" class="btn btn-outline-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg> Eliminar</a>
                                    
                            
                            </td>
                        </tr>
                        @include('partials.modal')
                    @endforeach
                        
                </tbody>
            </table>
        </div>
        <div class="d-grid gap-5">
            <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-file-pdf-fill"></i>
                Generar PDF</a>
        </div>
    
    </div>
  
@endsection
    {{-- {{-- {{-- INICIO DE MODAL --}}
    {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-2" id="exampleModalLabel">Editar Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row g-2">
                        <form method="POST" action="/editarProducto">
                            @csrf 
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                                    <input type="text" name="Nombre" value="{{old('Nombre')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('Nombre')}}
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Marca:</label>
                                    <input type="text" name="Marca" value="{{old('Marca')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('Marca')}}
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Cantidad:</label>
                                    <input type="text" name="Cantidad" value="{{old('Cantidad')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('Cantidad')}}
                                </div>
                            </div>
                        </div>  
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Costo:</label>
                                    <input type="text" name="Costo" value="{{old('Costo')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('Costo')}}
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                                    <input type="text" name="Precio" value="{{old('Precio')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('Precio')}}
                                </div>
                            </div>
                        </div> 
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Fecha ingreso:</label>
                                    <input type="text" name="Fecha_ingreso" value="{{old('Fecha_ingreso')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('Fecha_ingreso')}}
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Selecciona una foto:</label>
                                    <input type="file" name="foto" value="{{old('foto')}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('foto')}}
                                </div>
                            </div>
                        </div>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
        </div>
        </div>
    </div> --}}
    {{-- FIN DE MODAL --}} 

