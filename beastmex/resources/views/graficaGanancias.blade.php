@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <h1 class="display-1 text-center">Productos</h1>
    
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
                            
                        </tr>
                        @include('partials.modal')
                        @endforeach


                    </tbody>
                
            </table>
        </div>
    </div>

<br>

<div class="card container text-w">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
    
        function drawChart() {
            var data = google.visualization.arrayToDataTable(@json($graficaData));
    
            var options = {
                title: 'Costo y Precio de Productos',
                backgroundColor: 'transparent',
                chartArea: {
                    backgroundColor: 'transparent'
                },
                vAxis: {
                    minValue: 0, // Valor mínimo en el eje Y
                    // O puedes establecer un valor máximo
                    // maxValue: 100,
                }
            };
    
            var chart = new google.visualization.ColumnChart(document.getElementById('columnchart'));
    
            chart.draw(data, options);
        }
    </script>
    

    <div class="card-footer  p-4">
        <div id="columnchart" style="width: 900px; height: 500px;"></div>
    </div>
</div>




@endsection