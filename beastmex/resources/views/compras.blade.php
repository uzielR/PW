@extends('layouts.plantilla')
@section('titulo','compras')
@section('compras')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center">Compras</h1>
    <div class="card shadow container p-4">
        <div class=" container">
            <h3 class="display-6 text-center text-black">Productos</h3>
            <table class="table table-striped py-2">
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

                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center py-5">
                        <th scope="row">1</th>
                        <td>Ventilador Silencioso</td>
                        <td>Firex</td>
                        <td>8</td>
                        <td>$500.00</td>
                        <td>$750.00</td>
                        <td>13/10/23</td>
                        <td><img src="https://m.media-amazon.com/images/I/51Lw7LeIJoL._AC_UF894,1000_QL80_.jpg" alt=""></td>
                    </tr>
                    <tr class="text-center p-4">
                        <th scope="row">2</th>
                        <td>Tarjeta Madre</td>
                        <td>Firex</td>
                        <td>8</td>
                        <td>$6000.00</td>
                        <td>$4000.00</td>
                        <td>13/10/23</td>
                        <td><img src="https://w7.pngwing.com/pngs/960/973/png-transparent-intel-graphics-cards-video-adapters-lga-1150-motherboard-msi-cartoon-motherboard-computer-intel-electronic-device.png" alt=""></td>
                        
                    </tr>
                    
                </tbody>
                    

            </table>
            <div class="row py-2">
                <div class="col gap-2 text-center">
                    <a href="/crearOrden" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                        <i class="bi bi-clipboard2-plus"></i>
                    Crear Orden</a>
                    <a href="#" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                        <i class="bi bi-journal-text"></i>
                        Ordenes de Compra
                    </a>
                </div> <!-- cierra botón submit -->
            </div>
        </div>
    </div>
@endsection <!-- end section Almacén ?? -->
