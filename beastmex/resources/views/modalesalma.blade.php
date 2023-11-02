@extends('layouts.plantilla')
@section('titulo','Almacen')
@section('almacen')
    {{-- INICIO DE MODAL --}}
<div class="modal fade" id="exampleModal" tabindex="-1" data-bs-toggle="modal" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-2" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <form method="POST" action="/modal">
                        @csrf 
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                                <input type="text" name="Nombre" value="{{old('Nombre')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('Nombre')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Marca:</label>
                                <input type="text" name="Marca" value="{{old('Marca')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('Marca')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cantidad:</label>
                                <input type="text" name="Cantidad" value="{{old('Cantidad')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('Cantidad')}}
                            </div>
                        </div>
                    </div>  
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Costo:</label>
                                <input type="text" name="Costo" value="{{old('Costo')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('Costo')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                                <input type="text" name="Precio" value="{{old('Precio')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('Precio')}}
                            </div>
                        </div>
                    </div> 
                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Fecha ingreso:</label>
                                <input type="text" name="Fecha_ingreso" value="{{old('Fecha_ingreso')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('Fecha_ingreso')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Selecciona una foto:</label>
                                <input type="file" name="foto" value="{{old('foto')}}"  class="form-control" id="recipient-name">
                                {{$errors->first('foto')}}
                            </div>
                        </div>
                    </div>   
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
    </div>
    </div>
</div>
{{-- FIN DE MODAL --}}





{{-- 
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-2" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Marca:</label>
                            <input type="text" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Cantidad:</label>
                            <input type="number" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                </div>  
                <div class="row g-2">
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Costo:</label>
                            <input type="number" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Precio Venta:</label>
                            <input type="number" class="form-control" id="recipient-name" required>
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
                            <label for="recipient-name" class="col-form-label">Selecciona una foto:</label>
                            <input type="file" class="form-control" id="recipient-name" required>
                        </div>
                    </div>
                </div> 
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
       </div>
    </div>
</div> --}}
@endsection