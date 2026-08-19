@extends('layouts.base')

@section('title', 'Ferretería El Tornillo')
@section('h1', 'Ferretería El Tornillo')

@section('content')
    <p>Bienvenido a ferreteria el tornillo</p>

    <p><strong>Hay {{ count($herramientas) }} herramientas en el inventario.</strong></p>

    @if(count($herramientas) > 0)
        <ul>
            @foreach($herramientas as $herramienta)
                <li>
                    {{ $herramienta->nombre }} - Precio: Bs. {{ $herramienta->precio }}
                </li>
            @endforeach
        </ul>
    @else
        <p>No hay herramientas registradas aún.</p>
    @endif

    <p><em>Inventario atendido por Steven Vincenty Echegaray</em></p>
    <a href="/herramientas/nuevo" class="btn">Registrar nueva herramienta</a>
@endsection