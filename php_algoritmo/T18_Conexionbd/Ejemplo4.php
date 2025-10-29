<?php
$host = "localhost"; //o la IP del servidor de base de datos 
$usuario = "root"; //o el usuario de la base de datos
$password = ""; //o la contraseña del usuario 
$basededatos = "productos"; // o el nombre de la base de datos

try {
    $conn = new PDO("mysql:host = $host; dbname=$basededatos", $usuario, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h3>Conexion exitosa a la base de datos productos!...</h3>";

    $sql = "select p.id_producto, p.nombre, p.descripcion, p.precio, p.stock, c.nombre_categoria, m.nombre_marca, u.nombre_unidad 
            from productos p, categorias c, marcas m, unidades_medida u
            where c.id_categoria = p.id_categoria and m.id_marca = p.id_marca and u.id_unidad = p.id_unidad";

    $stmt = $conn ->prepare($sql);
    $stmt -> execute();

    if ($stmt->rowCount() > 0) {
        echo "<table border = '1' cellpadding = '8' cellspacing = '0'>
        <tr style='background-color: #f2f2f2;'>
        <th>id_producto</th>
        <th>nombre</th>
        <th>descripcion</th>
        <th>precio</th>
        <th>stock</th>
        <th>categoria</th>
        <th>marca</th>
        <th>unidad</th>
        </tr>";
        while ($fila = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>
        <td>{$fila ['id_producto']}</td>
        <td>{$fila ['nombre']}</td>
        <td>{$fila ['descripcion']}</td>
        <td>{$fila ['precio']}</td>
        <td>{$fila ['stock']}</td>
        <td>{$fila ['nombre_categoria']}</td>
        <td>{$fila ['nombre_marca']}</td>
        <td>{$fila ['nombre_unidad']}</td>
        </tr>";
        }
        echo "</table>";
    }else {
        echo "<p>No se encontraron registros en la tabla productos.</p>";
    }
    
} catch (PDOException $e) {
    echo "<p style = 'color:red;'>Error conexion base de datos productos ". $e -> getMessage() ."</p>";
}

?>