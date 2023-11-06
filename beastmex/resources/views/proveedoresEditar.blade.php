@extends('layouts.plantilla')
@section('titulo','proveedoresEditar')
@section('compras')


<link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
<h1 class="display-3 text-center p-5">Editar proveedor</h1>

<div class=" container p-3 ">
    <form action="#">
        <div class="card container text-center border-info " style="Height:auto">
            
            <div class="card-body">
                <div class="col-md">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Nombre:</label>
                        <input type="text" name="NombreProvedor" class="form-control" id="recipient-name" required>
                    </div>
                </div>
                <div class="col-md">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Marca:</label>
                        <input type="text" class="form-control" id="recipient-name" required>
                    </div>
                </div>
            </div>
            <div class="p-4 gap-5">
                <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                    <i class="bi bi-receipt"></i>
                Gurdar Cambios</a>
                <a href="/proveedores" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                </svg> Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection