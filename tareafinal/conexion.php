<?php
$servername = "localhost";
$username = "root";
$password = ""; // Sin contraseña por defecto
$dbname = "clientes_db"; // Nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
