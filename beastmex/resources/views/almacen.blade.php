@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>
    <div class=" card container col-mb-8">
        <h1 class="display-1 text-center">PRODUCTOS</h1>
        <table class="table table-striped">
            <thead>
                <tr class="text-center border-1">
                    <th>No.Serie</th>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Costo</th>
                    <th>Precio Venta</th>
                    <th>Fecha Ingreso</th>
                    <th>Foto</th>
                    <th> </th>

                </tr>
            </thead>
            <tbody>
                <tr class="text-center p-4">
                    <th scope="row">0111</th>
                    <td>Disco Duro</td>
                    <td>Firex</td>
                    <td>8</td>
                    <td>$800.00</td>
                    <td>$750.00</td>
                    <td>13/10/23</td>
                    <td><img src="https://www.pchmayoreo.com/pub/media/catalog/product/7/5/7503035006878-S_1.jpg" alt=""></td>
                    <td>
                        <div class="button">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" href="/modal">Editar</button>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </div>
                    </td>
                </tr>
                
            </tbody>
                

        </table>
        <div class="d-grid gap-5">
            <button class="btn btn-danger" type="button">GENERAR PDF</button>
        </div>
    </div>


@endsection