<!-- INICIO DE modalCatalogoPro EDITAR -->
<div class="modal fade" id="modalCatalogoPro{{ $item->id }}" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-2" id="modalCatalogoPro">Editar Producto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                    <form method="POST" action="/EditarProductoCatalogo/{{$item->id}}/confirm" enctype="multipart/form-data">
                        @csrf 
                        @method('PUT')

                        <div class="row g-2">  <!-- INICIA fila de campos -->

                            <div class="col-md">  <!-- Campo 1.1 INICIO DROPDOWN LIST -->
                                <label class="form-label">Marca del producto:</label>
                                <span class="ms-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
                                        <path d="M2 6l6 6 6-6" />
                                    </svg>
                                </span>
                                
                                <select class="form-control" name="txtproductBrand">
                                    <option value="#" {{ old('txtproductBrand') == '#' ? 'selected' : '' }}> >> De click para elegir una opción <<</option>
                                    <option value="Acer" {{ old('txtproductBrand') == 'Acer' ? 'selected' : '' }}>Acer</option>
                                    <option value="Apple" {{ old('txtproductBrand') == 'Apple' ? 'selected' : '' }}>Apple</option>
                                    <option value="Asus" {{ old('txtproductBrand') == 'Asus' ? 'selected' : '' }}>Asus</option>
                                    <option value="Dell" {{ old('txtproductBrand') == 'Dell' ? 'selected' : '' }}>Dell</option>
                                    <option value="HP" {{ old('txtproductBrand') == 'HP' ? 'selected' : '' }}>HP Hewlett packard</option>
                                    <option value="Lenovo" {{ old('txtproductBrand') == 'Lenovo' ? 'selected' : '' }}>Lenovo</option>
                                    <option value="Microsoft" {{ old('txtproductBrand') == 'Microsoft' ? 'selected' : '' }}>Microsoft</option>
                                    <option value="MSI" {{ old('txtproductBrand') == 'MSI' ? 'selected' : '' }}>MSI</option>
                                    <option value="Sony" {{ old('txtproductBrand') == 'Sony' ? 'selected' : '' }}>Sony</option>
                                    <option value="Toshiba" {{ old('txtproductBrand') == 'Toshiba' ? 'selected' : '' }}>Toshiba</option>
                                    
                                </select>
                                <p class="text-primary">{{$errors->first('txtproductBrand')}}</p>
                            </div> <!-- Campo 1.1 TERMINO DROPDOWN LIST -->

                            <div class="col-md">  <!-- Campo 1.2 -->
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Descripcion del producto:</label>
                                    <input type="text" name="txtproductName" value="{{$item->productName }}"  class="form-control" id="recipient-name">
                                    {{$errors->first('txtproductName')}}
                                </div>
                            </div>

                        </div>  <!-- TERMINA fila de campos -->


                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>
 
            </div>
        </div>
    </div>
</div> 
<!-- FIN DE modalCatalogoPro EDITAR -->


<!-- INICIO DE modalCatalogoPro DELETE -->

<div class="modal fade" id="destroyProductoCatalogo{{ $item -> id }}delete"  data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        
        <div class="modal-header">
          <h1 class="modal-title fs-4 fw-semibold fw-bold" id="staticBackdropLabel">Borrar Libro </h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">

            <form method="POST" action="{{ route('productoCatalogo.destroy',$item->id)}}">
                @csrf 
                @method('DELETE')   
                <div class="text-danger fs-4 fw-semibold">
                  ¿Seguro que borraras el producto {{ $item->productName }}  ?
                </div>           

   
        </div>


        <div class="modal-footer">
            <button type="submit" class="btn btn-danger"> <i class="bi bi-trash"></i> Si, Borralo </button>
        </form>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No,Salir</button>
        </div>

      </div>
    </div>
  </div>

<!-- FIN DE modalCatalogoPro DELETE -->