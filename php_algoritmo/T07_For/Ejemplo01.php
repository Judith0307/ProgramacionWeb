<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Ejemplo 1: Iteracion $i \n";
}
?>

<?php
for ($i = 60; $i <= 100; $i++) {
    echo "Ejemplo 1: Iteracion $i \n";
}
?>

<?php
for ($i = 1; $i <= 10; $i++) {
    echo "Numero: " . $i . "\n";
}
?>

<?php
//Determinamos un arreglo
$frutas = array("Manzana", "Banana", "Cereza", "Durazno", "Uva");

//Usamos un ciclo for paea recorrer el arreglo
for ($i = 0; $i < count($frutas); $i++){
    echo "Fruta ". ($i + 1) . ": " . $frutas[$i] . "\n";
}
?>

<?php
/*Crear un arreglo para imprimir los meses del año, utiliza el for para el recorrido; ademas captura el mes equivalente a tu cumpleaños*/
$meses = array("Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
for ($i = 0; $i < count($meses); $i++) {
    echo "Meses " . ($i + 1) . ": ". $meses[$i] . "\n";
}
echo "El mes de mi cumpleaños es: " . $meses[2];
?>