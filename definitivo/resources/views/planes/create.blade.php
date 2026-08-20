@extends('layouts.base')

@section('title', 'Internet Rápido S.A. - Nuevo Plan')

@section('content')
    <div class="container">
        <h1>Internet Rápido S.A.</h1>
        <h2>Nuevo Plan de Internet</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Mensaje de éxito (opcional) -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="/planes/nuevo" method="POST" class="form-plan">
            @csrf

            <div class="form-group">
                <label for="velocidad">Velocidad del plan:</label>
                <input type="text" id="velocidad" name="velocidad" class="form-control" 
                       placeholder="Ej: 100 Mbps, 200 Mbps, 500 Mbps" 
                       value="{{ old('velocidad') }}" required>
                <small class="form-text text-muted">Ejemplo: 100 Mbps, 200 Mbps, 500 Mbps</small>
            </div>

            <div class="form-group">
                <label for="precio">Precio mensual (Bs.):</label>
                <input type="number" id="precio" name="precio" class="form-control" 
                    placeholder="Ej: 450" 
                    value="{{ old('precio') }}" required min="1">
                <small class="form-text text-muted">Ingresá el precio en bolivianos (solo números)</small>
            </div>

            <button type="submit" class="btn-submit">Registrar Plan</button>
        </form>

        <div class="volver">
            <a href="/solicitudes">← Volver a la página principal</a>
        </div>
    </div>
@endsection