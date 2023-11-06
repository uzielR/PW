@extends('layouts.plantilla')
@section('titulo','Inicio')
@section('compras')


   

    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">

    <h2 class="display-3 text-center"> Ordenes</h2>
    
    <form class="d-flex relative p-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Buscar</button>
    </form>


    <div class=" container">
         
    <div class="card shadow container p-4">


        

            <table class="table table-striped py-2">
                <thead>
                    <tr class="text-center border-1">
                        <th>No.Orden</th>
                        <th>Nombre Comprador</th>
                        <th>Fecha</th>
                        <th>PDF</th>

                    </tr>
                </thead>
                <tbody>
                    <tr class="text-center py-5">
                        <th scope="row">1</th>
                        <td>Uziel</td>
                        <td>Firex</td>
                        <td>
                            <a href="comprasVerOrden" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                            PDF
                        </a></td>
                       
                    </tr>

                    <tr class="text-center py-5">
                        <th scope="row">1</th>
                        <td>Graci</td>
                        <td>Firex</td>
                        <td>
                            <a href="comprasVerOrden" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                            PDF
                        </a></td>
                       
                    </tr>
                    
                    <tr class="text-center py-5">
                        <th scope="row">1</th>
                        <td>nick</td>
                        <td>Firex</td>
                        <td>
                            <a href="comprasVerOrden" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                                <i class="bi bi-file-earmark-pdf-fill"></i>
                            PDF
                        </a></td>
                       
                    </tr>
                </tbody>
            </table>
            <div class="p-3 gap-5 text-center">
                <a href="/compras" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                  </svg> Regresar</a>
            </div>
            
    </div>

@endsection 
    
