<?php
// Datos del servidor de base de datos
$host = "127.0.0.1";
$user = "root";
$password = "";
$dbName = "crud_app";

// Generar objeto mysqli
$conn = new mysqli($host, $user, $password, $dbName);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>