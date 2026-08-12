<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nombre = $_POST["nombre"] ?? 'NO ESPECIFICADO';
    $correo = $_POST["correo"] ?? 'NO ESPECIFICADO';
    $consulta = $_POST["consulta"] ?? 'NO ESPECIFICADO';

    $servidor = [
        "examen de vista" => "50bs",
        "armazon clasico" => "180bs",
        "lentes de sol" => "120bs",
    ];
    echo "<h1>cita reservada en optica mirasol</h1>";
    echo "<hr>";

    echo "<h2>Datos de la cita</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Consulta:</strong> $consulta</p>";
    
    echo "<hr>";

    echo "<h2>Nuestros servicios</h2>";
    echo "<ul>";
    foreach ($servicios as $servicio) {
        echo "<li>$servicio</li>";
    }
    echo "</ul>";
    echo "<hr>";

    echo "<p><strong>Te atiende steven</strong></p>";
    echo "<p><small>Parcial 2 - steven - 11 de agosto de 2026</small></p>";
}