@extends('layouts.plantilla')
@section('titulo','ticket')
@section('compras')


    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h3 class="display-6 text-center text-black"></h3>

    @section('almacen')
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">


    <h1 class="display-3 text-center">Nueva orden</h1>

    <div class=" container p-2 ">
     
        <div class="card container text-center border-info " style="Height:auto">

                
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
                
                <div class="d-grid p-3 gap-5">
                    <a href="#" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                      </svg> Generar PDF</a>
                </div>
    
                
         </div>

         


    @endsection 
@endsection


                 