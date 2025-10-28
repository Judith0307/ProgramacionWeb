<?php
//DO-WHILE
$i = 1;
do {
    echo "Ejemplo 01: Iteracion $i \n";
    $i++;
} while ($i <= 5);
?>

<?php
//Imprimir una cadena de texto con un ciclo do ... while
$mensaje = "Hola, esta es una repeticion: ";
$repeticiones = 1;

do {
    echo $mensaje . $repeticiones . "\n";
    $repeticiones++;
} while ($repeticiones <= 5);
?>