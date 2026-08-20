@extends('layouts.base')

@section('title', 'Internet Camila S.A. - Tu conexión de confianza')

@section('content')
    <div class="container">
        <section class="hero">
            <h1>Internet Camila S.A.</h1>
            <p class="hero-subtitle">Conectamos tu mundo con la mejor velocidad</p>
            <div class="hero-banner">
                <span class="hero-text">Internet de alta velocidad para toda tu familia</span>
            </div>
        </section>

        <!-- DESCRIPCIÓN DE LA EMPRESA -->
        <section class="presentacion">
            <h2>¿Quiénes somos?</h2>
            <div class="presentacion-content">
                <p>
                    <strong>Internet Camila S.A.</strong> es tu proveedor de confianza para conexión de alta velocidad en todo el país. 
                    Desde hace más de 10 años, ofrecemos planes flexibles, atención personalizada y la mejor tecnología para que 
                    estés siempre conectado con tus seres queridos, tu trabajo y tu entretenimiento.
                </p>
                <p class="highlight">
                    Nuestro compromiso es brindarte <strong>velocidad, estabilidad y soporte 24/7</strong> para que nunca te quedes sin conexión.
                </p>
            </div>
        </section>

        <!-- NUESTROS PLANES -->
        <section class="nuestros-planes" id="nuestros-planes">
            <h2>Nuestros Planes</h2>
            <div class="planes-grid">
                @foreach($planes as $plan)
                    <div class="plan-card">
                        <div class="plan-badge">Plan #{{ $plan->id }}</div>
                        <h3>{{ $plan->velocidad }}</h3>
                        <p class="precio">Bs. {{ number_format($plan->precio, 2) }}</p>
                        <p class="plan-fecha">Creado: {{ $plan->created_at->format('d/m/Y') }}</p>
                        <a href="/solicitudes/nueva" class="btn-plan">Contratar</a>
                    </div>
                @endforeach
            </div>
        </section>

        <!-- ATENDIDO POR -->
        <div class="inventario-atendido">
            <div class="atendido-badge">
                <span class="badge-text">Inventario atendido por <strong>Guddy Steven Vincenty Echegaray</strong></span>
            </div>
        </div>

        <!-- BOTÓN NUEVA SOLICITUD -->
        <div class="enlace-nuevo">
            <a href="/solicitudes/nueva" class="btn-nueva-solicitud">
                Nueva solicitud de instalación
            </a>
        </div>

        <!-- CONTACTO -->
        <section class="contacto" id="contacto">
            <h2>Contáctanos</h2>
            <div class="contacto-info">
                <div class="contacto-item">
                    <p><strong>Teléfono:</strong> +591 71130128</p>
                    <p><strong>Email:</strong> camila@gmail.com</p>
                    <p><strong>Dirección:</strong> Av. cochabamba #123, Ciudad</p>
                </div>
                <div class="contacto-item">
                    <p><strong>Horario de atención:</strong></p>
                    <p>Lunes a Viernes: 8:00 am - 8:00 pm</p>
                    <p>Sábados: 9:00 am - 2:00 pm</p>
                </div>
            </div>
        </section>
    </div>
@endsection