<?php
$host = "localhost"; // o la IP del servidor
$usuario = "root"; // tu usuario de MySQL
$contrasena = "tu_clave"; // tu contraseña
$baseDeDatos = "nombre_bd"; // nombre de la base de datos a la que deseas conectarte

// Crear conexión
$conn = new mysqli($host, $usuario, $contrasena, $baseDeDatos);

// Verificar conexión
if ($conn->connect_error) {
die("Conexión fallida: " . $conn->connect_error);
}

echo "Conectado exitosamente.";
?>
