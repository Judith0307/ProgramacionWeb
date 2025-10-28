<?php
function saludar($nombre){
    return"Hola $nombre!";
}
echo saludar("Juan");
?>

<?php
function sumar ($a, $b) {
    return $a + $b;
}

$resultado = sumar(5, 7);
echo "La suma de 5 y 7 es: ". $resultado . "\n";
?>

<?php
/*Elabora un algoritmo php utilizando funciones que permita determinar el area de un triángulo*/
function area($base, $altura){
    return ($base * $altura)/2;
}
$resultado = area(8, 10);
echo "El área es: ". $resultado;
?>