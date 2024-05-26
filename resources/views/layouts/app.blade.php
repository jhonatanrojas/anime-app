<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/sobre-nosotros') }}">Sobre Nosotros</a>
            <a href="{{ url('/contacto') }}">Contacto</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Tu Empresa</p>
    </footer>
</body>
</html>