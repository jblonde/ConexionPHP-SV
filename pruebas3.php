<?php
// conexión a la base de datos
$host = 'localhost';
$bd = 'mi_base_de_datos';
$usuario = 'mi_usuario';
$contrasena = 'mi_contraseña';

try {
$conexion = new PDO("mysql:host=$host;dbname=$bd;charset=utf8", $usuario, $contrasena);
$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// Verifica que se reciban datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];

$sql = "INSERT INTO usuarios (nombre, correo) VALUES (:nombre, :correo)";
$stmt = $conexion->prepare($sql);
$stmt->bindParam(':nombre', $nombre);
$stmt->bindParam(':correo', $correo);
$stmt->execute();

echo "Usuario registrado exitosamente.";
}
} catch (PDOException $e) {
echo "Error: " . $e->getMessage();
}
?>

