@extends('layouts.base')

@section('title', 'Internet Rápido S.A. - Planes disponibles')

@section('content')
    <div class="container">
        <h1>Internet Rápido S.A.</h1>
        <h2>Planes de Internet disponibles</h2>

        <div class="contador">
            <strong>Hay {{ count($planes) }} planes registrados.</strong>
        </div>

        @if(count($planes) > 0)
            <div class="planes-grid">
                @foreach($planes as $plan)
                    <div class="plan-card">
                        <h3>{{ $plan->velocidad }}</h3>
                        <p class="precio">Bs. {{ $plan->precio }}</p>
                        <p class="plan-id">ID: {{ $plan->id }}</p>
                        <p class="plan-fecha">Creado: {{ $plan->created_at->format('d/m/Y') }}</p>
                    </div>
                @endforeach
            </div>
        @else
            <p class="sin-solicitudes">No hay planes registrados aún.</p>
        @endif

        <div class="contador">
            <strong>Hay {{ count($solicitudes) }} solicitudes de instalación registradas.</strong>
        </div>

        <!-- TABLA DE SOLICITUDES -->
        @if(count($solicitudes) > 0)
            <section class="tabla-solicitudes-section">
                <h2>Solicitudes de instalación</h2>
                <div class="table-responsive">
                    <table class="tabla-solicitudes">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Cliente</th>
                                <th>Plan</th>
                                <th>Velocidad</th>
                                <th>Precio (Bs.)</th>
                                <th>Domicilio</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($solicitudes as $solicitud)
                                <tr>
                                    <td>{{ $solicitud->id }}</td>
                                    <td>{{ $solicitud->nombre ?? 'Cliente' }}</td>
                                    <td>{{ $solicitud->plan->velocidad ?? 'Sin plan' }}</td>
                                    <td>{{ $solicitud->plan->velocidad ?? 'N/A' }}</td>
                                    <td>Bs. {{ $solicitud->plan->precio ?? '0' }}</td>
                                    <td>{{ $solicitud->domicilio }}</td>
                                    <td>{{ $solicitud->created_at->format('d/m/Y H:i') }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </section>
        @else
            <p class="sin-solicitudes">No hay solicitudes de instalación registradas aún.</p>
        @endif


        <div class="enlace-nuevo">
            <a href="/planes/nuevo" class="btn-nueva-solicitud">Nuevo Plan</a>
        </div>

        <div class="volver">
            <a href="/solicitudes">← Volver a la página principal</a>
        </div>
    </div>
@endsection