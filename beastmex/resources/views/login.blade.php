@extends('layouts.plantilla1')
@section('titulo','Inicio')
@section('login')

  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  <h1 class="display-1 text-center text-white"></h1>
  <div class="container">
    <img src="css/imagenes/logo.png" alt="#">
  </div>
  <div class=" card container text-center mb-2 p-4">
    <form method="POST" action="{{ route('apodologin') }}" class="row">
      @csrf 
      <h1 class="text-center mb-4">LOgggGIN</h1>
      <div class="text-black mb-4">
        <label for="validationDefault01" class="form-label font-weight-bold p-2">Correo Electronico:</label>
        <input name="Correo" type="text" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp"
          placeholder="Ingrese su Correo Electronico" value="{{old('Correo')}}">
          {{$errors->first('Correo')}}
        </div>
      <div class="mb-4">
        <label for="exampleInputPassword1" class="form-label p-2">Contraseña:</label>
        <input name="Contraseña" type="text" class="form-control " id="exampleInputPassword1" placeholder="Ingrese su Contraseña" value="{{old('Contraseña')}}">
        {{$errors->first('Contraseña')}}
      </div>
      {{-- <div class="btn-group" role="group">
        <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
          Selecciona uno
        </button>
        <ul class="dropdown-menu p-4">
          <li><a class="dropdown-item" href="/almacen">Almacen</a></li>
          <li><a class="dropdown-item" href="/compras">Compras</a></li>
          <li><a class="dropdown-item" href="/ventas">Ventas</a></li>
          <li><a class="dropdown-item" href="#">Gerencia</a></li>
        </ul>
      </div> --}}
      <div class="d-grid gap-4 p-2">
        
        <button class="btn btn-primary" type="submit">Iniciar</button>
        <a>¿Olvidades tu Contraseña?</a>
      </div>
    </form>
  </div>


@endsection