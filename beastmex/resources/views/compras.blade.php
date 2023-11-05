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
                    <a href="/crearOrden" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard2-plus" viewBox="0 0 16 16">
                        <path d="M9.5 0a.5.5 0 0 1 .5.5.5.5 0 0 0 .5.5.5.5 0 0 1 .5.5V2a.5.5 0 0 1-.5.5h-5A.5.5 0 0 1 5 2v-.5a.5.5 0 0 1 .5-.5.5.5 0 0 0 .5-.5.5.5 0 0 1 .5-.5h3Z"/>
                        <path d="M3 2.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 0 0-1h-.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1H12a.5.5 0 0 0 0 1h.5a.5.5 0 0 1 .5.5v12a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5v-12Z"/>
                        <path d="M8.5 6.5a.5.5 0 0 0-1 0V8H6a.5.5 0 0 0 0 1h1.5v1.5a.5.5 0 0 0 1 0V9H10a.5.5 0 0 0 0-1H8.5V6.5Z"/>
                      </svg> Crear Orden</a>
                    <a href="#" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
                        <path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
                        <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                        <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                      </svg> Ordenes de Compra</a>
                </div> <!-- cierra botón submit -->
            </div>
        </div>
    </div>
@endsection <!-- end section Almacén ?? -->
