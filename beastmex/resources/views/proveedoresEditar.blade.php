@extends('layouts.plantilla')
@section('titulo','proveedoresEditar')
@section('compras')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-1 text-center p-5">Editar Proveedor</h1>

    <div class=" container p-3 ">
        <script>
            @if(session()->has('success'))
                Swal.fire({
                icon: 'success',
                title: '¡Formulario completado!',
                text: '{{ session('success') }}',
                });
            @endif
        </script>
        <form method="POST" action="/guardareditarPreveedor">
            @csrf
            <div class="card container border-info " style="Height:auto">
                <div class="row g-2 p-3">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre de la Empresa:</label>
                            <input type="text" name="NombreEmpresa" value="{{old('NombreEmpresa')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del la Empresa">
                            <p class="text-primary">{{$errors->first('NombreEmpresa')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Marca:</label>
                            <input type="text" name="Marca3" value="{{old('Marca3')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Marca">
                            <p class="text-primary">{{$errors->first('Marca3')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Direccion:</label>
                            <input type="text" name="Direccion3" value="{{old('Direccion3')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Direccion">
                            <p class="text-primary">{{$errors->first('Direccion3')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 p-3">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Linea de Dirección 2:</label>
                            <input type="text" name="Direccion4" value="{{old('Direccion4')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Dirección Dos">
                            <p class="text-primary">{{$errors->first('Direccion4')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Codigo Postal:</label>
                            <input type="text" name="CodigoPostal1" value="{{old('CodigoPostal1')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Codigo Postal">
                            <p class="text-primary">{{$errors->first('CodigoPostal1')}}</p>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Telefono:</label>
                            <input type="text" name="telefono3" value="{{old('telefono3')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Numero Telefonico">
                            <p class="text-primary">{{$errors->first('telefono3')}}</p>
                        </div>
                    </div>
                </div>
                <div class="row g-2 p-3">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                            <input type="text" name="correo2" value="{{old('correo2')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Correo Electronico">
                            <p class="text-primary">{{$errors->first('correo2')}}</p>
                        </div>
                    </div>
                </div>
                
                <div class="p-4 gap-5 text-center">
                    <button class="btn btn-primary" type="submit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                        <path d="M11 2H9v3h2V2Z"/>
                        <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0ZM1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5Zm3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4v4.5ZM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5V15Z"/>
                    </svg> Guardar Cambios</button>
                    <a href="/proveedores" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg> Regresar</a>
                </div>
            </div>
        </form>
    </div>

@endsection