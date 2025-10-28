<?php
//Buscar una matriz 
$personas = array (
    array("nombre" => "Juan", "edad" => 25),
    array("nombre"=> "Ana", "edad" => 30)
);

foreach ($personas as $persona) {
    if ($persona["nombre"] == "Ana") {
        echo "Ejemplo 1: Persona encontrada: " . $persona["nombre"] . "\n";
    }
}
?>