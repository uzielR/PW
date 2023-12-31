<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

</head>

<body>
    
    @if(!Request::is('almacen3','proveedoresEditar','proveedores/create','comprasCrearOrden','comprasVerOrden','ventaStock','usuarios','gerenciaReporte','proveedoresProductos','ventasGrafica','comprasGrafica','gananciasGrafica')) <!-- Comprueba que no sea la página 'almaceneditar' -->
    
        @include('partials.navb')

    @endif

    <main>
        @yield('compras')
        @yield('almacen')
        @yield('almacen/search')
        @yield('gerencia')
        @yield('almaceneditar')
        @yield('ventas')
        @yield('proveedores')
        @yield('ventasStock')
        @yield('ordernes')
        @yield('reportes')
        @yield('usuarios')
        @yield('ventasGrafica')
        @yield('comprasGrafica')
        @yield('gananciasGrafica')
        @yield('catalogoProductos')
        <div class="contenidoGerencia">
            @yield('gerenciaRegistro')
        <div>
    </main>

    <footer class="footer">
        @component('partials.footer')
        @endcomponent
    </footer>
</body>
</html>
