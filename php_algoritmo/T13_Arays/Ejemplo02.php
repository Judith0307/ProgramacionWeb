<?php
//Buscar un elemento en un arreglo 
$frutas = array("Manzana", "Naranja", "Plátano");

if (in_array("Naranja", $frutas)) {
    echo "Ejemplo 1: Naranja esta en el array\n";
} else {
    echo "Ejemplo 2: Naranja no esta en el array\n";
}
?>