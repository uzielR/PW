<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>

    <body>

        <header>

        </header>

        <main>
            @include('partials.navb')
            @yield('compras')
            @yield('almacen')
            @include('partials.modal')
        </main>

        <footer class="footer">
            @component('partials.footer', ['now'=>$now])
            @endcomponent

        </footer>

    </body>
</html>