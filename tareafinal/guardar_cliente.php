<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];

    $sql = "INSERT INTO clientes (nombre, correo, telefono, mensaje) VALUES ('$nombre', '$correo', '$telefono', '$mensaje')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirige de vuelta al formulario sin ningún mensaje
        header("Location: index.html");
    } else {
        // Si ocurre un error, también redirige, pero podrías añadir un log si lo necesitas
        header("Location: index.html");
    }

    $conn->close();
    exit(); // Termina el script
}
?>
