<div class="modal fade" id="editarPoveedores{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">

            <div class="modal-header">
                <h1 class="modal-title fs-2" id="editarPoveedores">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body width-2">
                <form method="POST" action="/EditarProveedores/{{$item->id}}/confirm">
                    @csrf 
                    {!! method_field('PUT') !!}
            
                                    

                    <div class="row g-2">
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Nombre de la empresa:</label>
                                <input type="text" name="nombreEmpresaNP" value="{{$item->nombreEmpresa}}" 
                                    class="form-control" placeholder="Ingrese nombre de la mepresa" id="recipient-name">
                                <p class="text-primary">{{$errors->first('nombreEmpresaNP')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3">
                                <label for="recipient-name" class="col-form-label">Marca:</label>
                                <input type="text" name="marcaNP" value="{{$item->marca}}" class="form-control"
                                    placeholder="Marca proveedor" id="recipient-name">
                                <p class="text-primary">{{$errors->first('marcaNP')}}</p>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="mb-3 ">
                                <label for="recipient-name" class="col-form-label">Direccion:</label>
                                <input type="text" name="direccionNP" value="{{$item->direccion}}" class="form-control"
                                    placeholder="Ingrese la Dirección de la Empresa"
                                    id="recipient-name">
                                <p class="text-primary">{{$errors->first('direccionNP')}}</p>
                            </div>
                        </div>
                    </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Linea de direccion 2:</label>
                                    <input type="text" name="direccion2NP"  value="{{$item->direccion2}}" class="form-control"
                                        placeholder="Ingrese otra direccion de su mepresa"
                                        id="recipient-name">
                                    <p class="text-primary">{{$errors->first('direccion2NP')}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Codigo postal:</label>
                                    <input type="text" name="codigoPostalNP" value="{{$item->codigoPostalphp}}" class="form-control"
                                        name="codigoPostalNP" placeholder="Ingrese su codigo postal" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('codigoPostalNP')}}</p>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">telefono:</label>
                                    <input type="text" name="telefonoNP" value="{{$item->telefono}}" class="form-control"
                                        placeholder="Ingrese su numero" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('telefonoNP')}}</p>
                                </div>
                            </div>
                        </div>

                        <div class="row g-2">
                            <div class="col-md">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
                                    <input type="text" name="correoNP" value="{{$item->correoE}}" class="form-control"
                                        placeholder="Ingrese su correo electronico" id="recipient-name">
                                    <p class="text-primary">{{$errors->first('correoNP')}}</p>
                                </div>
                            </div>
                        </div>
                

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Guardar</button>
                    </div>
                </form>
            </div>
       </div>
    </div>
</div>