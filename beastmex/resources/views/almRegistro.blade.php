@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>

    <div class="container">
        <form action="#">
            <div class="container card p-4">
                <h1 class="modal-title text-center" id="exampleModalLabel">Registrar Producto</h1>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Costo:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                </div>
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Fecha de Ingreso:</label>
                            <input type="date" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Foto:</label>
                            <input type="file" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                </div>
                <div class="d-grid gap-5">
                    <button class="btn btn-primary" type="submit" href="#">Guardar Registro</button>
                </div>
            </div>
        </form>
    </div>

@endsection