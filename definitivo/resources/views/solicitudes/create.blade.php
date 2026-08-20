@extends('layouts.base')

@section('content')
    <div class="container">
        <h1>Internet Rápido S.A.</h1>
        <h2>Nueva solicitud de instalación</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/solicitudes/nueva" method="POST" class="form-solicitud">
            @csrf

            <div class="form-group">
                <label for="plan_id">Seleccioná un plan de internet:</label>
                <select name="plan_id" id="plan_id" class="form-control">
                    <option value="">-- Elegí un plan --</option>
                    @foreach($plans as $plan)
                        <option value="{{ $plan->id }}" {{ old('plan_id') == $plan->id ? 'selected' : '' }}>
                            {{ $plan->velocidad }} - Bs. {{ $plan->precio }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="domicilio">Domicilio de instalación:</label>
                <input type="text" id="domicilio" name="domicilio" class="form-control" 
                    placeholder="Ej: Av. Principal #123, Ciudad" value="{{ old('domicilio') }}">
            </div>
            <div class="form-group">
                <label for="nombre">Nombre del cliente:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" 
                    placeholder="Ej: Juan Pérez" value="{{ old('nombre') }}">
            </div>

            <button type="submit" class="btn-submit">Enviar solicitud</button>
        </form>

        <div class="volver">
            <a href="/solicitudes">← Volver a la lista de solicitudes</a>
        </div>
    </div>
@endsection