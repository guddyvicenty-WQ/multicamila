@extends('layouts.base')

@section('title', 'Internet Rápido S.A. - Iniciar Sesión')

@section('content')
    <div class="login-wrapper">
        <div class="login-card">
            <div class="login-header">
                <h2>Acceso a Planes</h2>
                <p>Ingresa tus credenciales para administrar o consultar los planes de internet.</p>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}" class="form-login">
                @csrf

                <div class="form-group">
                    <label for="email">Correo Electrónico:</label>
                    <input id="email" type="email" name="email" class="form-control" 
                           value="{{ old('email') }}" required autofocus autocomplete="username"
                           placeholder="ejemplo@correo.com">
                </div>

                <div class="form-group">
                    <label for="password">Contraseña:</label>
                    <input id="password" type="password" name="password" class="form-control" 
                           required autocomplete="current-password"
                           placeholder="••••••••">
                </div>

                <div class="form-group-checkbox">
                    <label for="remember_me">
                        <input id="remember_me" type="checkbox" name="remember">
                        <span>Recordar sesión</span>
                    </label>
                </div>

                <button type="submit" class="btn-submit">
                    Iniciar Sesión
                </button>
            </form>

            <div class="login-footer">
                <a href="/solicitudes" class="btn-link">← Volver al inicio</a>
            </div>
        </div>
    </div>
@endsection
