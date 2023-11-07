@extends('layouts.plantilla')
@section('titulo','proveedoresCrear')
@section('compras')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    
    <h1 class="display-3 text-center p-5">Nuevo proveedor</h1>

    <div class=" container p-3 ">
        <div class="card container text-center border-info " style="Height:auto">
            <script>
                @if (session('success'))
                    Swal.fire({
                        icon: 'success',
                        title: '¡Éxito!',
                        text: '{{ session('success') }}',
                    });
                @endif
            </script>
            <form method="POST" action="/crearProveedorNP">
                @csrf
                <div class="card-body">

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombres:</label>
                                <input type="text" value="{{old('NombreNP')}}" class="form-control" name="NombreNP"
                                    placeholder="Ingrese sus nombres" id="recipient-name">
                                <p class="text-primary">{{$errors->first('NombreNP')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Apellido paterno:</label>
                                <input type="text" value="{{old('apellidoPaternoNP')}}" class="form-control"
                                    name="apellidoPaternoNP" placeholder="Ingrese su apellido paterno" id="recipient-name">
                                <p class="text-primary">{{$errors->first('apellidoPaternoNP')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Apellido materno</label>
                                <input type="text" value="{{old('apellidoMaternoNP')}}" class="form-control"
                                    name="apellidoMaternoNP" placeholder="Ingrese su apellido materno"
                                    id="recipient-name">
                                <p class="text-primary">{{$errors->first('apellidoMaternoNP')}}</p>
                            </div>
                        </div>
                    </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombre de la empresa:</label>
                                    <input type="text" value="{{old('nombreEmpresaNP')}}" name="nombreEmpresaNP"
                                        class="form-control" placeholder="Ingrese nombre de la mepresa" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('nombreEmpresaNP')}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Marca:</label>
                                    <input type="text" value="{{old('marcaNP')}}" class="form-control" name="marcaNP"
                                        placeholder="Marca proveedor" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('marcaNP')}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3 ">
                                    <label for="recipient-name" class="col-form-label">Direccion:</label>
                                    <input type="text" value="{{old('direccionNP')}}" class="form-control"
                                        name="direccionNP" placeholder="Ingrese la Dirección de la Empresa"
                                        id="recipient-name">
                                    <p class="text-primary">{{$errors->first('direccionNP')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Linea de direccion 2:</label>
                                    <input type="text" value="{{old('direccion2NP')}}" class="form-control"
                                        name="direccion2NP" placeholder="Ingrese otra direccion de su mepresa"
                                        id="recipient-name">
                                    <p class="text-primary">{{$errors->first('direccion2NP')}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Codigo postal:</label>
                                    <input type="text" value="{{old('codigoPostalNP')}}" class="form-control"
                                        name="codigoPostalNP" placeholder="Ingrese su codigo postal" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('codigoPostalNP')}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">telefono:</label>
                                    <input type="text" value="{{old('telefonoNP')}}" class="form-control" name="telefonoNP"
                                        placeholder="Ingrese su numero" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('telefonoNP')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                                <input type="text" value="{{old('correoNP')}}" class="form-control" name="correoNP"
                                    placeholder="Ingrese su correo electronico" id="recipient-name">
                                <p class="text-primary">{{$errors->first('correoNP')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 gap-1">
                        <button class="btn btn-primary" type="submit"><i class="bi bi-person-add"></i> Registrar proveedor</button>

                        <a href="/proveedores" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg
                                xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z" />
                            </svg> Regresar</a>
                    </div>
            </form>


        </div>
    </div>

@endsection