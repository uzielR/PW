@extends('layouts.plantilla')
@section('titulo','proveedoresEditar')
@section('compras')


    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h3 class="display-6 text-center text-black"></h3>

    @section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    
    
    <h1 class="display-3 text-center">Editar proveedor</h1>

    <div class=" container ">
     
        <div class="card container text-center border-info " style="Height:auto">

               
                
                <div class="card-body">
                        
                        <form action="#">
                       
                             
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Marca:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                    

                </div> 
                
                
                <div class="d-grid p-4 gap-5">
                    <a href="/crearProveedor" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">
                        <i class="bi bi-person-add"></i>
                       Editar</a>
                </div>

         </div>

    @endsection 
@endsection