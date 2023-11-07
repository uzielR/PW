@extends('layouts.plantilla')
@section('titulo','Ventas')
@section('proveedores')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center">Productos</h1>
    <form class="d-flex relative p-5" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>
    <div class="card container shadow p-5">
        <div class=" container col-mb-8 border-8 p-4">
            <table class="table table-striped">
                <thead>
                    <tr class="text-center border-1">
                        <th>ID</th>
                        <th>Producto mas vendido del mes</th>
                        <th>Marca</th>
                        <th>Provedor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="text-center p-4">
                        <th scope="row">0111</th>
                        <td>Disco duro</td>
                        <td>Firex</td>
                        <td>Oscar</td>
                    </tr>
                <tbody>
                
            </table>

        </div>

        <div class="row py-2">
            <div class="col gap-2 text-center">
                <button class="btn btn-primary" type="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                    <path d="M11 2H9v3h2V2Z"/>
                    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                </svg> Guardar Cambios</button>
                <a href="/proveedores" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                  </svg> Regresar</a>
            </div> <!-- cierra botón submit -->
        </div> 
    </div>
    
@endsection