<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Web Personal - clientes</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/clientes.css">
</head>
<body>
    <h1>Laisa Kenani hernandez Guzman <span>Ingeniería en Computación</span></h1>
    <!-- Menú de navegación -->
    <div class="fondo-nav">
        <nav class="menu">
            <a href="index.html">Inicio</a>
            <a href="clientes.php">Clientes</a>
            <a href="sobreMi.html">Sobre mí</a>
            <a href="contacto.html">Contacto</a>
        </nav>
    </div>

    <div class="table-container">
        <h2>Clientes</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Mensaje</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Incluir conexión a la base de datos
                include 'conexion.php';

                // Consulta SQL para obtener los datos de la tabla "clientes"
                $sql = "SELECT id, nombre, correo, telefono, mensaje FROM clientes";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    // Recorrer los resultados y generar las filas de la tabla
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td>" . $row["nombre"] . "</td>";
                        echo "<td>" . $row["correo"] . "</td>";
                        echo "<td>" . $row["telefono"] . "</td>";
                        echo "<td>" . $row["mensaje"] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5'>No hay datos disponibles</td></tr>";
                }

                // Cerrar la conexión
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
