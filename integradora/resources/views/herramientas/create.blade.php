@extends('layouts.base')

@section('title', 'Nueva Herramienta - Ferretería El Tornillo')
@section('h1', 'Ferretería El Tornillo')

@section('content')
    <h2>Registrar nueva herramienta</h2>

    @if ($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/herramientas/nuevo" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre de la herramienta:</label>
            <input type="text" id="nombre" name="nombre" value="{{ old('nombre') }}" required>
        </div>
        <div class="form-group">
            <label for="precio">Precio en Bs:</label>
            <input type="number" id="precio" name="precio" value="{{ old('precio') }}" required>
        </div>
        <button type="submit" class="btn btn-success">Registrar herramienta</button>
    </form>

    <a href="/herramientas">← Volver al inventario</a>
@endsection