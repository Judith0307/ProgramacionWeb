<?php
$host = "localhost"; //o la IP del servidor de base de datos 
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //o la contraseña del usuario 
$basededatos = "gestion_empleados"; // o el nombre de la base de datos

//Crear conexion
$conexion = new mysqli($host, $usuario, $password, $basededatos);

//Verificar conexion
if ($conexion->connect_error) {
    die("Error de conexion gestion_empleados: ". $conexion->connect_error);
}

echo "<h3>Conexion exitosa a la base de datos gestion_empleados!...</h3>";
echo "<p>Usando MySQL</p>";
echo "<p>BIENVENIDOS</p>";
?>