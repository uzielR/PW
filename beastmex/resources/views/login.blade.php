<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>

    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <h1 class="display-1 text-center text-white"></h1>
    <div class="container">
        <img src="css/imagenes/logo.png" alt="#">
    </div>
  </head>
  
 <body>
  

    <div class=" card container text-center mb-2 p-4">
        <form method="#" class="row">
            <h1 class="text-center mb-4">LOGIN</h1>
            <div class="text-black mb-4">
              <label for="validationDefault01" class="form-label font-weight-bold p-2">Correo Electronico:</label>
              <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese su Correo Electronico" required>
            </div>
            <div class="mb-4">
              <label for="exampleInputPassword1" class="form-label p-2">Contraseña:</label>
              <input type="password" class="form-control " id="exampleInputPassword1" placeholder="Ingrese su Contraseña" required>
            </div>
            <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Selecciona uno
                </button>
                <ul class="dropdown-menu p-4">
                  <li><a class="dropdown-item" href="/almacen">Almacen</a></li>
                  <li><a class="dropdown-item" href="/compras">Compras</a></li>
                  <li><a class="dropdown-item" href="#">Ventas</a></li>
                  <li><a class="dropdown-item" href="#">Gerencia</a></li>
                </ul>
            </div>
            <div class="d-grid gap-4 p-2">
                <button class="btn btn-primary" type="submit">Iniciar</button>
                <a href="#">¿Olvidades tu Contraseña?</a>
            </div>
        </form>
    </div>
    
    
 </body>