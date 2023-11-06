@extends('layouts.plantilla')
@section('titulo','STOCK')
@section('ventasStock')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">


    <div class="container p-5">
        <form action="#">
            <div class="container card p-4">
                <h1 class="modal-title text-center" id="exampleModalLabel">Nueva Venta</h1>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Cliente:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del Cliente">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Apellido Paterno:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese el Apellido Paterno">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Apellido Materno:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese el Apellido Materno">
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del Producto">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Marca:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese la Marca">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese la Cantidad">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio del Producto:</label>
                            <input type="text" class="form-control" id="recipient-name" placeholder="Ingrese el Precio del Producto">
                        </div>
                    </div>
                </div>
                <div class="text-center p-1 gap-5">
                    <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                        <i class="bi bi-receipt"></i>
                    Gurdar Venta</a>
                    <a href="/ventas" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                      </svg> Regresar</a>
                </div>
            </div>
            
        </form>
    </div>

@endsection