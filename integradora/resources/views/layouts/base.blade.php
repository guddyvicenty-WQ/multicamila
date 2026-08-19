<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mi Proyecto Laravel')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>@yield('h1', 'Ferretería El Tornillo')</h1>
        @yield('content')
        <footer>
            Integradora - guddy steven vincenty echegaray - 18 de agosto de 2026
        </footer>
    </div>
</body>
</html>