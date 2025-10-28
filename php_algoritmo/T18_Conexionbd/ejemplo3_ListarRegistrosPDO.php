<?php
$host = "localhost"; //o la IP del servidor de base de datos 
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //o la contraseña del usuario 
$basededatos = "gestion_empleados"; // o el nombre de la base de datos

try {
    //crear conexion usando PDO
    $conn = new PDO("mysql:host = $host; dbname=$basededatos", $usuario, $password);
    //Establecer el modo de error de PDC a excepcion
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Conexion exitosa a la base de datos gestion_empleados!...</h3>";
    
    //Preparar y ejecutar la consulta SQL
    $sql = "select p.idempleado, p.dni, p.nombres, p.apellidos, p.direccion, p.telefono, c.nombrecargo
            from empleado p, cargo c
            where c.id = p.cargo_id";
    
    //Ejecutar la consulta y obtener el conjunto de resultados 
    $stmt = $conn ->prepare($sql);
    $stmt -> execute();

    //Verificar si hay resultados 
    if ($stmt->rowCount() > 0) {
        echo "<table border = '1' cellpadding = '8' cellspacing = '0'>
        <tr style='background-color: #f2f2f2;'>
        <th>idempleado</th>
        <th>dni</th>
        <th>nombres</th>
        <th>apellidos</th>
        <th>direccion</th>
        <th>telefono</th>
        <th>cargo</th>
        </tr>";
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
        <td>{$fila ['idempleado']}</}td>
        <td>{$fila ['dni']}</td>
        <td>{$fila ['nombres']}</td>
        <td>{$fila ['apellidos']}</td>
        <td>{$fila ['telefono']}</td>
        <td>{$fila ['direccion']}</td>
        <td>{$fila ['nombrecargo']}</td>
        </tr>";
        }
        echo "</table>";
    }else {
        echo "<p>No se encontraron registros en la tabla clientes.</p>";
    }
    
} catch (PDOException $e) {
    echo "<p style = 'color:red;'>Error conexion base de datos gestion_empleados ". $e -> getMessage() ."</p>";
}
    

?>