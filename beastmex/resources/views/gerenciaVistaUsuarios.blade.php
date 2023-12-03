@extends('layouts.plantilla')
@section('titulo','Gerencia Lista Usuarios')
@section('gerencia')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <h1 class="display-1 text-center">Gerencia lista usuarios</h1>

    <div class="row p-4 justify-content-center">
        <div class="col-md-3 mb-1">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ir a Graficas .
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/ventasGrafica">Grafica ventas</a></li>
                    <br>
                    <li><a class="dropdown-item" href="/comprasGrafica">Grafica compras</a></li>
                    <br>
                    <li><a class="dropdown-item" href="/gananciasGrafica">Grafica ganancias</a></li>
                </ul>
            </div>
        </div>

        <div class="col-md-3 mb-1">
            <div class="dropdown">
                <button class="btn btn-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ir a Reportes .
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="/ventasGrafica">Reporte ventas</a></li>
                    <br>
                    <li><a class="dropdown-item" href="/comprasGrafica">Reporte compras</a></li>
                    <br>
                    <li><a class="dropdown-item" href="/gananciasGrafica">Reporte ganancias</a></li>
                </ul>
            </div>
        </div>
    </div>


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
                        <th>Id:</th>
                        <th>Area de trabajo:</th>
                        <th>Nombre(s) empleado:</th>
                        <th>Apellido paterno:</th>
                        <th>Apellido materno:</th>
                        <th>E-mail:</th>
                        <th>Puesto:</th>
                        <th> Opciones </th>
                    </tr>
                </thead>
                @foreach ($consR as $item)
                    <tbody>
                        <tr class="text-center p-4 py-2">
                            <th scope="row">{{$item->id }}</th>
                            <td>{{$item->AreaUsuario }}</td>
                            <td>{{$item->ApellidoPaternoUsuario }}</td>
                            <td>{{$item->ApellidoMaternoUser }}</td>
                            <td>{{$item->NombreUsuario }}</td>
                            <td>{{$item->emailUsuario }}</td>
                            <td>{{$item->posicionUsuario }}</td>
                            <td class="col p-2 text-center py-5">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMgrRegistroUsuarios{{ $item->id }}"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                    </svg>
                                    Editar
                                </button>
                                <a href="/gerenciaVistaUsuarios" class="btn btn-outline-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                    <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                </svg> Eliminar</a>
                            </td>
                        </tr>
                        @include('partials.modalMgrRegistro')
                    @endforeach
                        
                </tbody>
            </table>
        </div>
        <div class="d-grid p-1 gap-5">
            <a href="/gerenciaRegistro" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-person-add"></i> Nuevo registro de usuario
            </a>
        </div>
        <div class="d-grid gap-5">
            <a href="#" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-file-pdf-fill"></i>
                Generar PDF</a>
        </div>
    </div>
@endsection

