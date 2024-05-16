<?php

// Configuración de la conexión a la base de datos
$servername = "localhost";
$username = "usuario";
$password = "contraseña";
$database = "basededatos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Comprobar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para seleccionar datos
$sql = "SELECT id, nombre, apellido FROM empleados";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar cada fila de datos
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
    }
} else {
    echo "0 resultados";
}

// Cerrar conexión
$conn->close();

?>
