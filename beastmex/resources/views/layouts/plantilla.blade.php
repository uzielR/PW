<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
    
</head>

<body>
    
    @if(!Request::is('almacen3','editarproveedores',)) <!-- Comprueba que no sea la página 'almaceneditar' -->
    
        @include('partials.navb')

    @endif

    <main>
        @yield('compras')
        @yield('almacen')
        @yield('gerencia')
        @yield('almaceneditar')
        @yield('ventas')
        @yield('proveedores')
    </main>

    <footer class="footer">
        @component('partials.footer')
        @endcomponent
    </footer>
</body>
</html>
