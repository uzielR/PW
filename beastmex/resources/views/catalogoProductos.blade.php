@extends('layouts.plantilla')
@section('titulo', 'Catalogo de productos')
@section('catalogoProductos')

    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <h1 class="display-1 text-center">Catalogo de productos</h1>
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
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
                        <th>ID (no. serie):</th>
                        <th>Producto:</th>
                        <th>Marca:</th>
                        <th> Opciones </th>
                    </tr>
                </thead>

                <tbody>
                @foreach ($consR as $item)
                        <tr class="text-center p-4 py-2">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->productName }}</td>
                            <td>{{ $item->productBrand }}</td>
                            <td class="col p-2 text-center py-5">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalCatalogoPro{{ $item->id }}"><i class="bi bi-pencil-square"></i>
                                    Editar
                                </button>
                                <button type="button" class="btn btn-danger m-1" data-bs-toggle="modal" data-bs-target="#destroyProductoCatalogo{{$item->id}}">
                                    <i class="bi bi-trash-fill"></i> - Borrar 
                                </button>
                            </td>
                        </tr>
                        @include('partials.modalCatalogoPro')
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex flex-row justify-content-between gap-5">
            <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-file-pdf-fill"></i>
                Generar PDF
            </a>
            <a href="/catalogoRegistro" class="btn btn-success" tabindex="-1" role="button" aria-disabled="true">
            <i class="bi bi-plus-square-fill"></i>
                Agregar Producto
            </a>
            <a href="/almacen2" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">
            <i class="bi bi-arrow-return-left"></i>
                Regresar a almacen recibo
            </a>
        </div>
    </div>
@endsection
