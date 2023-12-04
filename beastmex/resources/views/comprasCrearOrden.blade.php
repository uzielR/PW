@extends('layouts.plantilla')
@section('titulo','ordenes')
@section('ordernes')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
    <h1 class="display-3 text-center p-2">Nueva orden</h1>

    <div class=" container p-2 ">
      
            @if (session()->has('success'))
                <script>
                    Swal.fire({
                    icon: 'success',
                    title: '¡Formulario completado!',
                    text: '{{ session('success') }}',
                    });
                </script>
            @endif
        
        <div class="card container text-center border-info " style="Height:auto">
            <form method="POST" action="/guardarOrden">
                @csrf
                <div class="card-body">
                     <h3>Datos de la empresa</h3>  
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre de la empresa:</label>
                                <input type="text" name="Empresa" value="{{old('Empresa')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre de la Empresa">
                                <p class="text-primary">{{$errors->first('Empresa')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Dirección de la Empresa:</label>
                                <input type="text" name="DireccionEmpresa" value="{{old('DireccionEmpresa')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Dirección de la Empresa">
                                <p class="text-primary">{{$errors->first('DireccionEmpresa')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Linea de Dirección 2:</label>
                                <input type="text" name="Dirrecion" value="{{old('Dirrecion')}}" class="form-control" id="recipient-name" placeholder="Ingrese la Segunda Dirección de la Empresa">
                                <p class="text-primary">{{$errors->first('Dirrecion')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Email:</label>
                                <input type="text" name="Condado" value="{{old('Condado')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Nombre del Condado">
                                <p class="text-primary">{{$errors->first('Condado')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Codigo Postal:</label>
                                <input type="text" name="Codigopostal" value="{{old('Codigopostal')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Codigo Postal">
                                <p class="text-primary">{{$errors->first('Codigopostal')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Telefono:</label>
                                <input type="text" name="Telefono" value="{{old('Telefono')}}" class="form-control" id="recipient-name" placeholder="Ingrese el Numero Telefonico de la Empresa">
                                <p class="text-primary">{{$errors->first('Telefono')}}</p>
                            </div>
                        </div>
                    </div>
                    <h3>Datos del Proveedor</h3>
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="empresa_id" class="col-form-label">Nombre de la empresa:</label>
                                <select name="NombreProducto" class="form-control" id="empresa_id">
                                    <option value="">Seleccione una Empresa</option>
                                    @foreach ($proveedores as $proveedor)
                                        <option value="{{ $proveedor->id }}" 
                                                data-direccion="{{ $proveedor->direccion }}"
                                                data-direccion2="{{ $proveedor->direccion2 }}"
                                                data-correo="{{ $proveedor->correoE}}"
                                                data-codigo-postal="{{ $proveedor->codigoPostalphp }}"
                                                data-telefono="{{ $proveedor->telefono }}">
                                            {{ $proveedor->nombreEmpresa }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="direccion" class="col-form-label">Dirección:</label>
                                <input type="text" name="direccion" value="{{ old('DireccionEmpresa1') }}" class="form-control" id="direccion" placeholder="Ingrese la Dirección de la Empresa">
                                <p class="text-primary">{{ $errors->first('DireccionEmpresa1') }}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="direccion2" class="col-form-label">Línea de Dirección 2:</label>
                                <input type="text" name="direccion2" value="{{ old('Dirrecion1') }}" class="form-control" id="direccion2" placeholder="Ingrese la Dirección Dos de la Empresa">
                                <p class="text-primary">{{ $errors->first('Dirrecion1') }}</p>
                            </div>
                        </div>
                    </div>                    
                    
                    <div class="row g-2">
                        
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="correo" class="col-form-label">Correo Electrónico:</label>
                                <input type="text" name="correo" value="{{ old('CorreoEmpresa') }}" class="form-control" id="correo" placeholder="Ingrese el Correo Electrónico de la Empresa">
                                <p class="text-primary">{{ $errors->first('CorreoEmpresa') }}</p>
                            </div>
                        </div>
                        
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="codigo_postal" class="col-form-label">Código Postal:</label>
                                <input type="text" name="codigo_postal" value="{{ old('CodigoPostalEmpresa') }}" class="form-control" id="codigo_postal" placeholder="Ingrese el Código Postal de la Empresa">
                                <p class="text-primary">{{ $errors->first('CodigoPostalEmpresa') }}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="telefono" class="col-form-label">Teléfono:</label>
                                <input type="text" name="telefono" value="{{ old('TelefonoEmpresa') }}" class="form-control" id="telefono" placeholder="Ingrese el Teléfono de la Empresa">
                                <p class="text-primary">{{ $errors->first('TelefonoEmpresa') }}</p>
                            </div>
                        </div>
                        
                    </div>
                    <h3>Lista de Productos</h3>
                    <table class="table table-striped py-2">
                        <thead>
                            <tr class="text-center border-1">
                                <th>No.Serie</th>
                                <th>Nombre</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Costo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center py-5">
                                <th scope="row">1</th>
                                <td>Ventilador Silencioso</td>
                                <td>Firex</td>
                                <td>8</td>
                                <td>$500.00</td>
                                
                            </tr>
                            <tr class="text-center p-4">
                                <th scope="row">2</th>
                                <td>Tarjeta Madre</td>
                                <td>Firex</td>
                                <td>8</td>
                                <td>$6000.00</td>
                                
                                
                            </tr>
                            
                        </tbody>
                            
        
                    </table>
                </div> 
                <div class="p-3 gap-5">
                    <button class="btn btn-primary" type="submit"><i class="bi bi-floppy"></i> Guardar Registro</button>
                    
                    <a href="#" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-filetype-pdf" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M14 4.5V14a2 2 0 0 1-2 2h-1v-1h1a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM1.6 11.85H0v3.999h.791v-1.342h.803c.287 0 .531-.057.732-.173.203-.117.358-.275.463-.474a1.42 1.42 0 0 0 .161-.677c0-.25-.053-.476-.158-.677a1.176 1.176 0 0 0-.46-.477c-.2-.12-.443-.179-.732-.179Zm.545 1.333a.795.795 0 0 1-.085.38.574.574 0 0 1-.238.241.794.794 0 0 1-.375.082H.788V12.48h.66c.218 0 .389.06.512.181.123.122.185.296.185.522Zm1.217-1.333v3.999h1.46c.401 0 .734-.08.998-.237a1.45 1.45 0 0 0 .595-.689c.13-.3.196-.662.196-1.084 0-.42-.065-.778-.196-1.075a1.426 1.426 0 0 0-.589-.68c-.264-.156-.599-.234-1.005-.234H3.362Zm.791.645h.563c.248 0 .45.05.609.152a.89.89 0 0 1 .354.454c.079.201.118.452.118.753a2.3 2.3 0 0 1-.068.592 1.14 1.14 0 0 1-.196.422.8.8 0 0 1-.334.252 1.298 1.298 0 0 1-.483.082h-.563v-2.707Zm3.743 1.763v1.591h-.79V11.85h2.548v.653H7.896v1.117h1.606v.638H7.896Z"/>
                    </svg> Generar PDF</a>
                    <button class="btn btn-primary" type="button"><i class="bi bi-send"></i></i>Enviar Correo</button>
                    <a href="/compras" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
                    </svg> Regresar</a>

                </div>
                
            </form>
                
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#empresa_id').on('change', function() {
                var empresa = $(this).find('option:selected');

                // Obtiene la información de la empresa seleccionada de los atributos de datos
                var direccion = empresa.data('direccion');
                var direccion2 = empresa.data('direccion2');
                var correo = empresa.data('correo');
                var codigoPostal = empresa.data('codigo-postal');
                var telefono = empresa.data('telefono');

                // Actualiza los campos del formulario con la información de la empresa
                $('#direccion').val(direccion);
                $('#direccion2').val(direccion2);
                $('#correo').val(correo);
                $('#codigo_postal').val(codigoPostal);
                $('#telefono').val(telefono);
                // Asigna los valores de los demás campos si es necesario
            });
        });
    </script>


@endsection 



                 