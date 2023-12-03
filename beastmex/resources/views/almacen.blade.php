@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="display-1 text-center">Productos</h1>
    <form class="d-flex relative p-3" role="search" method="GET" action="{{ route('almacen.search') }}">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" name="search_query">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
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
                @foreach ($productos as $item)
                    <tbody>
                        <tr class="text-center p-4 py-2">
                            <th scope="row">{{$item->idProducto }}</th>
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
                                <div class="row justify-content-center">
                                    <div class="col-auto">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->idProducto}}"><i class="bi bi-pencil-square"></i> Editar</button>
                                    </div>
                                    <div class="col-auto">
                                        <form method="POST" action="{{ route('almacen.destroy', $item->idProducto) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-info"><i class="bi bi-trash"></i> Eliminar</button>
                                        </form>
                                    </div>
                                </div>
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
   