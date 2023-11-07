@extends('layouts.plantilla')
@section('titulo','Grafica compras')
@section('gananciasGrafica')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center"> Productos mas vendidos</h1>
   

    <div class="card container p-4">
        <div class="card-body container">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-2 p-4">
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
                    <tr class="text-center p-4 py-2">
                        <th scope="row">1</th>
                        <td>Disco Duro</td>
                        <td>Firex</td>
                        <td>8</td>
                        <td>$800.00</td>
                        <td>$750.00</td>
                        <td>13/10/23</td> 
                        </td>
                    </tr>
                    
                </tbody>
            </table>




        </div>

    
    </div>
    <h1 class="display-1 text-center"> Grafica Productos</h1>
    <div class="text-center">
    <img src="{{ asset('https://3.bp.blogspot.com/-X24aRlnk89Q/Vg6xCpICQEI/AAAAAAAAFAU/Pqm7ua8Cm5k/s1600/estadistica2.jpg') }}" alt="Descripción de la imagen" />
    </div>

@endsection