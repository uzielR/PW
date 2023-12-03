<!-- INICIO DE modalMgrRegistro EDITAR -->
<div class="modal fade" id="modalMgrRegistroUsuarios{{ $item->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-2" id="exampleModalLabel">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                    <form method="POST" action="/EditarRegistroUsuario/{{$item->id}}/confirm" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')

                        <div class="row g-2">  <!-- INICIA 1er fila 3 campos -->
                            <div class="col-md"> <!-- Campo 1.1 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Apellido paterno:</label>
                                    <input type="text" name="txtApellidoPaternoUsuario" value="{{$item->ApellidoPaternoUsuario }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtApellidoPaternoUsuario')}}
                                </div>
                            </div>
                            <div class="col-md">  <!-- Campo 1.2 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Apellido materno:</label>
                                    <input type="text" name="txtApellidoMaternoUser" value="{{$item->ApellidoMaternoUser}}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtApellidoMaternoUser')}}
                                </div>
                            </div>
                            <div class="col-md">  <!-- Campo 1.3 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Nombre(s):</label>
                                    <input type="text" name="txtNombreUsuario" value="{{$item->NombreUsuario }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtNombreUsuario')}}
                                </div>
                            </div>

                        </div> <!-- TERMINA 1er fila 3 campos -->

                        <div class="row g-2">  <!-- INICIA 2da fila 3 campos -->

                            <div class="col-md">  <!-- Campo 2.1 INICIO DROPDOWN LIST -->
                                <label class="form-label"> Área del usuario:</label>
                                    <span class="ms-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                            <path d="M2 6l6 6 6-6" />
                                        </svg>
                                    </span>
                                <select class="form-control" name="txtAreaUsuario">
                                    <option value="#" {{ old('txtAreaUsuario') == '#' ? 'selected' : '' }}> >> De click para elegir una opción <<</option>
                                    <option value="Almacen" {{ old('txtAreaUsuario') == 'Almacen' ? 'selected' : '' }}>Almacen</option>
                                    <option value="Ventas" {{ old('txtAreaUsuario') == 'Ventas' ? 'selected' : '' }}>Ventas</option>
                                    <option value="Compras" {{ old('txtAreaUsuario') == 'Compras' ? 'selected' : '' }}>Compras</option>
                                    <option value="Gerencia" {{ old('txtAreaUsuario') == 'Gerencia' ? 'selected' : '' }}>Gerencia</option>
                                </select>
                                <p class="text-primary">{{$errors->first('txtAreaUsuario')}}</p>
                            </div> <!-- Campo 2.1 TERMINO DROPDOWN LIST -->

                            <div class="col-md">  <!-- Campo 2.2 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Posición usuario:</label>
                                    <input type="text" name="txtposicionUsuario" value="{{$item->posicionUsuario }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtposicionUsuario')}}
                                </div>
                            </div>

                            <div class="col-md">  <!-- Campo 2.3 -->
                                <div class="mb-3">
                                    <!-- Posición en formulario vacia a propósito -->
                                    <!-- Posición en formulario vacia a propósito -->
                                    <!-- Posición en formulario vacia a propósito -->
                                </div>
                            </div>

                        </div>  <!-- TERMINA 2da fila 3 campos -->

                        <div class="row g-2"> <!-- INICIA 3er fila 3 campos -->

                            <div class="col-md"> <!-- Campo 3.1 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">E-mail usuario:</label>
                                    <input type="text" name="txtemailUsuario" value="{{$item->emailUsuario }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtemailUsuario')}}
                                </div>
                            </div>
                            <div class="col-md">  <!-- Campo 3.2 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Password usuario:</label>
                                    <input type="password" name="txtpasswordUsuario" value="{{$item->passwordUsuario }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtpasswordUsuario')}}
                                </div>
                            </div>
                            <div class="col-md">  <!-- Campo 3.3 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Confirm_Password usuario:</label>
                                    <input type="password" name="txtpasswordUsuario_confirmation" value="{{$item->passwordUsuario_confirmation }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtpasswordUsuario_confirmation')}}
                                </div>
                            </div>

                        </div> <!-- TERMINA 3er fila 3 campos -->

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
 
            </div>
        </div>
    </div>
</div> 
<!-- FIN DE modalMgrRegistro EDITAR -->


<!-- INICIO DE modalMgrRegistro DELETE -->


<!-- FIN DE modalMgrRegistro DELETE -->