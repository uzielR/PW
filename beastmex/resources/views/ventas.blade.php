@extends('layouts.plantilla')
@section('titulo','Inicio')
@section('ventas')



    @section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>
    <div class=" card container col-mb-8">
        <h1 class="display-1 text-center">Ventas</h1>
        <table class="table table-striped">
            <thead>


    <div class=" container col-mb-8">

        <table class="table table-striped">
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
                <tr class="text-center p-4">
                    <td>02/11/2023</td>
                    <td>Juan</td>
                    <td>Resendiz</td>
                    <td>Alvarez</td>
                    <td>Disco Duro </td>
                    <td>Lenovo</td>
                    <td>2</td>
                    <td>$750.00</td>
                    <td>1500</td>

                </tr>
                <tr class="text-center p-4">
                    <th>03/11/2023</th>
                    <td>Jesica</td>
                    <td>Resendiz</td>
                    <td>Perez</td>
                    <td> Cable USB</td>
                    <td>Motorola</td>
                    <td>1</td>
                    <td>$250.00</td>
                    <td>250</td>

            
    
                </tr>
            
            </tbody>
                

        </table>
        <div class="d-grid gap-5">
            <button class="btn btn-danger" type="button">GENERAR TICKET</button>
        </div>
        <br>
    </div>
  

@endsection

