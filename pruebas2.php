<?php
$host = "localhost";
$baseDeDatos = "nombre_bd";
$usuario = "root";
$contrasena = "tu_clave";

try {
$conn = new PDO("mysql:host=$host;dbname=$baseDeDatos;charset=utf8", $usuario, $contrasena);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conectado exitosamente.";
} catch (PDOException $e) {
echo "Conexión fallida: " . $e->getMessage();
}
?>