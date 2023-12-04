@extends('layouts.plantilla')
@section('titulo','compras')
@section('compras')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center">Compras</h1>

    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit" >Buscar </button>
    </form>


    <div class="card shadow container p-4">
        <div class=" container">
            <h1 class="display-6 text-center">PRODUCTOS</h1>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-2 p-4">
                        <th>No.Serie</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Costo</th>
                        <th>Cantidad</th>
                        <th>Fecha Ingreso</th>
                        <th>Precio Venta</th>
                        <th>Foto</th>
                        
                        

                    </tr>
                </thead>
                @foreach ($consb as $item)
                    <tbody>
                        <tr class="text-center p-4 py-2">
                            <th scope="row">{{$item->idProducto }}</th>
                            <td>{{$item->NombreProducto }}</td>
                            <td>{{$item->NombreMarca }}</td>
                            <td>{{$item->CostoProducto }}</td>
                            <td>{{$item->Cantidad }}</td>
                            <td>{{$item->FechaIngreso }}</td>
                            <td>{{$item->PrecioVenta }}</td>
                            {{-- <td>{{$item->ImagenProducto }}</td> --}}
                            <td>
                                @if($item->ImagenProducto)
                                    <img src="{{ asset('imagenes2/' . $item->ImagenProducto) }}" alt="Imagen del Producto" style="max-width: 100px; max-height: 100px;">
                                @endif
                            </td>
                            
                        </tr>
                        @include('partials.modal')
                @endforeach
                        
                </tbody>
            </table>
            <div class="row py-2">
                <div class="col gap-2 text-center">
                    <a href="/comprasCrearOrden" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                        <i class="bi bi-clipboard2-plus"></i>
                    Crear Orden</a>
                    <a href="comprasVerOrden" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                        <i class="bi bi-journal-text"></i>
                        Ordenes de Compra
                    </a>
                </div> <!-- cierra botón submit -->
            </div>
        </div>
    </div>
@endsection <!-- end section Almacén ?? -->
