<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Internet Rápido S.A.')</title>
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <h1>@yield('h1', 'Internet Rápido S.A.')</h1>
            <p>Conectamos tu mundo con la mejor velocidad</p>
        </header>

        <nav class="nav">
            <div class="nav-links">
                <a href="/solicitudes" class="{{ request()->is('solicitudes') ? 'active' : '' }}">Solicitudes</a>
                <a href="/planes" class="{{ request()->is('planes*') ? 'active' : '' }}">Planes</a>
                <a href="/solicitudes/nueva" class="{{ request()->is('solicitudes/nueva') ? 'active' : '' }}">Nueva solicitud</a>
                <a href="/solicitudes#inicio">Inicio</a>
                <a href="/solicitudes#contacto">Contacto</a>
                <a href="/solicitudes#nuestros-planes">Productos</a>
            </div>
            <div class="nav-auth">
                @auth
                    <span class="user-greeting">Hola, {{ Auth::user()->name ?? 'Usuario' }}</span>
                    <form method="POST" action="{{ route('logout') }}" class="form-logout">
                        @csrf
                        <button type="submit" class="btn-logout">Cerrar sesión</button>
                    </form>
                @else
                    <a href="{{ route('login') }}" class="btn-login-nav {{ request()->is('login') ? 'active' : '' }}">Iniciar sesión</a>
                @endauth
            </div>
        </nav>
        <main class="content">
            @yield('content')
        </main>

        <footer class="footer">
            <p>Integradora - <strong>guddy steven vincenty echegaray</strong>{{date('d/m/Y')}}</p>
            <p style="font-size: 0.9rem; opacity: 0.8; margin-top: 10px;">
                Internet Rápido S.A. - Todos los derechos reservados
            </p>
        </footer>
    </div>
</body>
</html>