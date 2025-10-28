<?php
$host = "localhost"; //o la IP del servidor de base de datos 
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //o la contraseña del usuario 
$basededatos = "gestion_empleados"; // o el nombre de la base de datos

try{ 
    //crear conexion usando PDO
    $conexion = new PDO("mysql:host = $host; dbname=$basededatos", $usuario, $password);
    //Establecer el modo de error de PDC a excepcion
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Conexion exitosa a la base de datos gestion_empleados!...</h3>";
    echo "<p>Usando PDO</p>";
    echo "<p>Bienvenidos</p>";
} catch(PDOException $e){
    die("Error de conexion gestion_empleados: " . $e->getMessage());
}

?>