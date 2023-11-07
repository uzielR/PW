@extends('layouts.plantilla')
@section('titulo','Ventas')
@section('proveedores')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center">Proveedores</h1>
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>
    <div class="card container shadow p-4">
        <div class="container col-mb-8 border-3">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-1">
                        <th>ID</th>
                        <th>Nombre de la Empresa</th>
                        <th>Marca</th>
                        <th>Direccion</th>
                        <th>Linea de Dirección 2</th>
                        <th>Codigo Postal</th>
                        <th>Telefono</th>
                        <th>Correo Electronico</th>
                        <th>Opciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="text-center p-4">
                        <th scope="row">0111</th>
                        <td>roberto</td>
                        <td>Firex</td>
                        <td>Avenida Revolucion</td>
                        <td>4458692369</td>
                        <td>Firex45@gmail.com</td>
                        <td>Avenida Revolucion</td>
                        <td>4458692369</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/proveedoresEditar" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="bi bi-pencil-square"></i> Editar
                                </a>
                                <a href="/proveedoresProductos" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="bi bi-pencil-square"></i> Productos
                                </a>
                                <a href="#" class="btn btn-outline-info" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="bi bi-trash3"></i> Eliminar
                                </a>
                            </div>
                        </td>
                    </tr>

                    <tr class="text-center p-4">
                        <th scope="row">0111</th>
                        <td>roberto</td>
                        <td>Firex</td>
                        <td>Avenida Revolucion</td>
                        <td>4458692369</td>
                        <td>Firex45@gmail.com</td>
                        <td>Avenida Revolucion</td>
                        <td>4458692369</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="/proveedoresEditar" class="btn btn-outline-primary" tabindex="-1" role="button" aria-disabled="true">
                                    <i class="bi bi-pencil-square"></i> Editar
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
                </tbody>
            </table>
        </div>

        <div class="d-grid p-1 gap-5">
            <a href="/crearProveedor" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                <i class="bi bi-person-add"></i> Nuevo proveedor
            </a>
        </div>
    </div>
@endsection
