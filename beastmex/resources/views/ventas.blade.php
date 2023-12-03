@extends('layouts.plantilla')
@section('titulo','Ventas')
@section('ventas')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center">Ventas</h1>
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>
    <div class="card container p-2">
        <div class="card-body container">
            <h1 class="display-6 text-center">PRODUCTOS</h1>
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-2 p-4">
                        <th>No.Serie</th>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Costo</th>
                        <th>Fecha Ingreso</th>
                        <th>Precio Venta</th>
                        <th>Foto</th>
                        

                    </tr>
                </thead>
                @foreach ($consR as $item)
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
                            
                        </tr>
                        @include('partials.modal')
                    @endforeach
                        
                </tbody>
            </table>
        </div>
        
    </div>
  
    <div class="card container mt-3 ">
        <div class="card-body container">
            <table class="table table-striped">
                <h1 class="display-6 text-center"> TICKET VENTAS</h1>
                <thead>
                    <tr class="text-center border-1">
                        <th>Fecha</th>
                        <th>Nombre Cliente</th>
                        <th>Apellido Materno</th>
                        <th>Apellido Paterno</th>
                        <th>Nombre producto</th>
                        <th>Marca</th>
                        <th>Cantidad</th>
                        <th>Precio producto</th>
                        <th>Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cons as $item)
                        <tr class="text-center p-4">
                            <th>{{$item->updated_at }}</th>
                            <td>{{$item->NombreCliente }}</td>
                            <td>{{$item->ApellidoPaterno }}</td>
                            <td>{{$item->ApellidoMaterno }}</td>
                            <td> {{$item->NombreProducto }}</td>
                            <td>{{$item->Marca5 }}</td>
                            <td>{{$item->Cantidad5}}</td>
                            <td>{{$item->Precio5 }}</td>
                            <td>{{$item->Total}}</td>
                            <td>
                                <a href="{{ route('ventas.pdf', ['id' => $item->id]) }}" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-ticket-perforated" viewBox="0 0 16 16">
                                    <path d="M4 4.85v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Zm-7 1.8v.9h1v-.9H4Zm7 0v.9h1v-.9h-1Z"/>
                                    <path d="M1.5 3A1.5 1.5 0 0 0 0 4.5V6a.5.5 0 0 0 .5.5 1.5 1.5 0 1 1 0 3 .5.5 0 0 0-.5.5v1.5A1.5 1.5 0 0 0 1.5 13h13a1.5 1.5 0 0 0 1.5-1.5V10a.5.5 0 0 0-.5-.5 1.5 1.5 0 0 1 0-3A.5.5 0 0 0 16 6V4.5A1.5 1.5 0 0 0 14.5 3h-13ZM1 4.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v1.05a2.5 2.5 0 0 0 0 4.9v1.05a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-1.05a2.5 2.5 0 0 0 0-4.9V4.5Z"/>
                                </svg> Generar Ticket</a>
                            </td>
                    
            
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="d-grid p-1 gap-5">
                <a href="/ventaStock" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                    <i class="bi bi-receipt"></i>
                Crear nueva venta</a>
            </div>
        </div>
    </div>
    <div class="card container mt-3">
        <div class="card-body container">
            <table class="table table-striped">
                <h1 class="display-6 text-center">GANANCIAS</h1>
                <thead>
                    <tr class="text-center border-1">
                        <th>Id Venta</th>
                        <th>Nombre Cliente</th>
                        <th>Apellido Materno</th>
                        <th>Apellido Paterno</th>
                        <th>Ganancia</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cons as $item)
                    <tr class="text-center p-4">
                        <th>{{ $item->id}}</th>
                        <td>{{ $item->NombreCliente }}</td>
                        <td>{{ $item->ApellidoPaterno }}</td>
                        <td>{{ $item->ApellidoMaterno }}</td>
                        <td>{{ isset($item->Ganancia) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection