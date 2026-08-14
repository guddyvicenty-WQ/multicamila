<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title ?? 'Multicentro Camila · Tienda de barrio' }}</title>

    {{-- Carga de estilos usando el helper asset() --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    <header>
        <h1>Multicentro Camila</h1>
        <nav>
            <div>
                <p class="logo"><></p>
            </div>
            <input type="checkbox" name="menu-hamburguesa" id="menu-hamburguesa">
            <label for="menu-hamburguesa" class="menu-icono">
                <span></span>
            </label>
            <ul class="menu-lista" id="menu-lista">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#ofertas">Ofertas</a></li>
                <li><a href="#contacto">Contacto</a></li>
            </ul>
        </nav>
    </header>

    <button type="button" id="btn-tema" class="boton-modo">☀️ Cambiar a modo oscuro</button>
    <button type="button" id="btn-tema2" class="boton-cambiar">Cambiar texto</button>

    <section id="inicio">
        <h2>Bienvenidos a tu multicentro de confianza</h2>
        <p>
            Disfruta de la mejor conexión a internet con velocidad 
            ultrarrápida, estabilidad garantizada y soporte 24/7. 
            Conéctate con nosotros y lleva tu experiencia digital al siguiente nivel.
        </p>
        <p>
            <b>Horario:</b> Lunes a sábados de 8:00 a 20:30 · Domingos de 9:00 a 13:00
        </p>
    </section>

    <section id="productos">
        <h2>Algunos de nuestros productos</h2>

        <table border="1" cellpadding="6">
            <thead>
                <tr>
                    <th>Categoría</th>
                    <th>Velocidad</th>
                    <th>Precio (aprox.)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>60 mbps</td>
                    <td>internet</td>
                    <td>149 Bs</td>
                </tr>
                <tr>
                    <td>100 mbps</td>
                    <td>internet</td>
                    <td>169 Bs</td>
                </tr>
                <tr>
                    <td>160 mbps</td>
                    <td>internet</td>
                    <td>229 Bs</td>
                </tr>
                <tr>
                    <td>320 mbps</td>
                    <td>internet</td>
                    <td>369 Bs</td>
                </tr>
            </tbody>
        </table>

        <p>
            <small>Los precios pueden variar sin previo aviso.</small>
        </p>
    </section>

    <section id="ofertas">
        <h2>Servicios que ofrecemos</h2>
        <ul>
            <li>Venta de servicio internet</li>
            <li>Pagos de servicios</li>
            <li>Soporte de internet (consultar zona)</li>
            <li>Recargas de cualquier línea</li>
            <li>Promociones de servicio Entel (por temporada)</li>
        </ul>
    </section>

    <section id="contacto">
        <h2>Contáctate con nosotros</h2>
        <address>
            <b>Dirección:</b> Av. Cochabamba<br />
            <b>WhatsApp:</b> +59171130128<br />
            <b>Email:</b> multicentrocamila@gmail.com
        </address>
    </section>

    <section>
        <h2>Formulario de contacto</h2>
        {{-- En Laravel se recomienda añadir la directiva @csrf para seguridad --}}
        <form id="form-contacto" action="#" method="POST" novalidate>
            @csrf

            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" required></textarea>

            <button type="submit">Enviar</button>
            <p id="mensaje-error" class="aviso"></p>
        </form>
    </section>

    <footer>
        <p>
            &copy; {{ date('Y') }} · Multicentro Camila · 
            <span>Hecho por Steven Vincenty</span>
        </p>
    </footer>

    {{-- Carga de script usando el helper asset() --}}
    <script src="{{ asset('js/script.js') }}"></script>
</body>
</html>