<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>
<body>

    @yield('partials.navb')
    @yield('login')

    @yield('contenido')
    @include('partials.navb')
    <br>

    @yield('compras')
    @yield('almacen')
    
    @include('partials.modal')
</body>
</html>