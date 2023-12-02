@extends('layouts.plantilla')
@section('titulo','Ventas')
@section('proveedores')
<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
<h1 class="display-1 text-center">Proveedores</h1>
<form class="d-flex relative p-3" role="search">
    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
    <button class="btn btn-outline-primary" type="submit">Buscar</button>
</form>


<script>
    @if(session('confirmacionEditarProv'))
        Swal.fire({
            icon: 'success',
            title: '¡Éxito!',
            text: '{{ session('confirmacionEditarProv') }}',
        });
    @endif
</script>


<div class="card container shadow p-4">
    
        <div class="container col-mb-8 border-3">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-1">
                        <th>ID</th>
                        <th>Nombre de la Empresa</th>
                        <th>Marca:</th>
                        <th>Direccion:</th>
                        <th>Direccion 2:</th>
                        <th>Codigo Postal</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                @foreach ($consR as $item)
                <tbody>
                    <tr class="text-center p-4">
                        <th scope="row">{{$item->id }}</th>
                        <td>{{$item->nombreEmpresa }}</td>
                        <td>{{$item->marca}}</td>
                        <td>{{$item->direccion}}</td>
                        <td>{{$item->direccion2}}</td>
                        <td>{{$item->codigoPostalphp}}</td>
                        <td>{{$item->telefono}}</td>
                        <td>{{$item->correoE }}</td>
                        
                        <td>
                            <div class="btn-group" role="group">
                                <a  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarPoveedores{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                    Editar
                                </a>
                                <a href="proveedoresProductos" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="bi bi-pencil-square"></i> Productos
                                </a>
                                <a href="#" class="btn btn-outline-info" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="bi bi-trash3"></i> Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>
                    @include('partials.modalProveedores')
                    @endforeach
                </tbody>
                
            </table>
        </div>

    <div class="d-grid p-1 gap-5">
        <a href="/proveedores/create" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
            <i class="bi bi-person-add"></i> Nuevo proveedor
        </a>
    </div>
</div>
@endsection
