{{-- INICIO DE MODAL --}}
<div class="modal fade" id="exampleModal{{ $item->idProducto}}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-2" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row g-2">
                    <form method="POST" action="/EditarProductos/{{$item->idProducto}}/confirm" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre del Producto:</label>
                                <input type="text" name="NombreProducto" value="{{$item->NombreProducto}}" class="form-control" id="recipient-name">
                                {{$errors->first('NombreProducto')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Marca:</label>
                                <input type="text" name="NombreMarca" value="{{$item->NombreMarca }}"  class="form-control" id="recipient-name">
                                {{$errors->first('NombreMarca')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Costo:</label>
                                <input type="text" name="CostoProducto" value="{{$item->CostoProducto}}"  class="form-control" id="recipient-name">
                                {{$errors->first('CostoProducto')}}
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Cantidad:</label>
                                <input type="text" name="CantidadProducto" value="{{$item->Cantidad}}"  class="form-control" id="recipient-name">
                                {{$errors->first('CantidadProducto')}}
                            </div>
                        </div>
                      
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Fecha ingreso:</label>
                                    <input type="text" name="FechaIngreso" value="{{$item->FechaIngreso }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('FechaIngreso')}}
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Precio venta:</label>
                                    <input type="text" name="PrecioVenta" value="{{$item->PrecioVenta }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('PrecioVenta')}}
                                </div>
                            </div>
                        </div> 
                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Selecciona una foto:</label>
                                    <input type="file" name="ImagenProducto" value="{{'imagenes2/'.$item->ImagenProducto}}"  class="form-control" id="recipient-name" accept="image/*">
                                    {{$errors->first('ImagenProducto')}}
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