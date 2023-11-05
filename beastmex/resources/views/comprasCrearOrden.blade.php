@extends('layouts.plantilla')
@section('titulo','ticket')
@section('compras')


    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h3 class="display-6 text-center text-black"></h3>

    @section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">


    

    <div class=" container ">
     
        <div class="card text-center border-info " style="Height:auto">

                <h1 class="modal-title text-center" id="exampleModalLabel">Orden de compra</h1>
                
                <div class="card-body">
                        
                        <form action="#">
                       
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">No. de serie:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
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
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Fecha ingreso:</label>
                                            <input type="date" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Costo:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-2">
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Precio venta:</label>
                                            <input type="text" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                    <div class="col-md">
                                        <div class="mb-3">
                                            <label for="recipient-name" class="col-form-label">Fecha venta</label>
                                            <input type="date" class="form-control" id="recipient-name" required>
                                        </div>
                                    </div>
                                </div>
                                
                
                

                </div> 
                
                
                <div class = "d-grid gap-2 bg-primary" >
                    <button type="submit" class="btn btn-primary fs-4 " >Crear</button>
                </div>

         </div>

    @endsection 
@endsection


                 