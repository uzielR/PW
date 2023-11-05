<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Bootstrap Icons --}}
    @vite(['resources/js/app.js'])
    <title>@yield('titulo')</title>
</head>

    <body>

        <header>

        </header>

        <main>
            <!-- Aquí va el contenido principal de tu página -->
            @yield('login')
        </main>

        <footer>

        </footer>

    </body>
</html>