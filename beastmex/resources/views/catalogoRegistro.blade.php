@extends('layouts.plantilla')
@section('titulo','Catalogo')
@section('compras')

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="{{ asset('css/styles1.css') }}">
  

  <h1 class="display-1 text-center "> Catalogo Listado </h1>

  <div class="row p-4">
    <div class="col-md-3 ">
      <!-- Consultar registros productos botón -->
      <div class="botonSuperior" style="padding-left:100px">
         <a class="btn btn-primary" href="/catalogoProductos" type="submit" style="width: 200px;"><i class="bi bi-people-fill"></i> Regresar a Listado
            de Productos</button>
          </a>
      </div>
    </div>

    <div class="col-md-3 ">

    </div>
  </div>

  {{-- formuario --}}
  <div class="card shadow container p-5"> <!-- INICIA CARD container -->
    <script>
      @if (session() -> has('success'))
        Swal.fire({
          icon: 'success',
          title: '¡Formulario completado!',
          text: '{{ session('success') }}',
        });
      @endif
    </script>
    <form method="POST" action="/GuardarRegistroProducto">
      @csrf
      <div class="row py-4"> <!-- Inicia fila UNO formulario con 3 campos -->

        <div class="col-md-4"> <!-- inicio campo datos uno (1.1) -->

            <div class="col-md">  <!-- Campo 2.1 INICIO DROPDOWN LIST -->
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
                    <option value="Huawei" {{ old('txtproductBrand') == 'Huawei' ? 'selected' : '' }}>Huawei</option>
                    <option value="Lenovo" {{ old('txtproductBrand') == 'Lenovo' ? 'selected' : '' }}>Lenovo</option>
                    <option value="Microsoft" {{ old('txtproductBrand') == 'Microsoft' ? 'selected' : '' }}>Microsoft</option>
                    <option value="MSI" {{ old('txtproductBrand') == 'MSI' ? 'selected' : '' }}>MSI</option>
                    <option value="Samsung" {{ old('txtproductBrand') == 'Samsung' ? 'selected' : '' }}>Samsung</option>
                    <option value="Sony" {{ old('txtproductBrand') == 'Sony' ? 'selected' : '' }}>Sony</option>
                    <option value="Toshiba" {{ old('txtproductBrand') == 'Toshiba' ? 'selected' : '' }}>Toshiba</option>
                    
                </select>
                <p class="text-primary">{{$errors->first('txtproductBrand')}}</p>
            </div> <!-- Campo 2.1 TERMINO DROPDOWN LIST -->

        </div>  <!-- termino campo datos uno (1.1) -->

        <div class="col-md-4">  <!-- campo datos dos (1.2) -->
          <div class="mb-3">
            <label class="form-label">Descripción del producto:</label>
            <input type="text" value="{{old('txtproductName')}}" class="form-control" name="txtproductName"
              placeholder="Ingrese apellido paterno del usuario">
            <p class="text-primary">{{$errors->first('txtproductName')}}</p>
          </div>
        </div>

        <div class="row py-2">
            <div class="col gap-2 text-center">

                <a href="/catalogoProductos" class="btn btn-info" tabindex="-1" role="button" aria-disabled="true">
                    <i class="bi bi-arrow-return-left"></i> 
                    Regresar a lista de productos
                </a>
                
                <button class="btn btn-primary" type="submit">
                    <i class="bi bi-person-add"></i> 
                    Guardar registro de producto
                </button>

            </div> <!-- cierra botón submit -->
        </div>
    </form>
  </div>  <!-- TERMINA CARD container -->
@endsection



