<?php
$host = 'localhost';
$bd = 'mi_base_de_datos';
$usuario = 'mi_usuario';
$contrasena = 'mi_contraseña';

try {
$conexion = new PDO("mysql:host=$host;dbname=$bd;charset=utf8", $usuario, $contrasena);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
echo "Conexión exitosa a la base de datos.";
} catch (PDOException $e) {
echo "Error en la conexión: " . $e->getMessage();
}
?>

