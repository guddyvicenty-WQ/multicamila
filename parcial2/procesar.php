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

    
}