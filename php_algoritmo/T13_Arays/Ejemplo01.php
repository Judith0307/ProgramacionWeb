<?php
//Ejemplo 1
$frutas = array("Manzana", "Naranja", "Plátano");
echo "Ejemplo 01: Primera fruta: " . $frutas[0] . "\n";
echo "Ejemplo 02 Segunda fruta: ". $frutas[1] . "\n";
?>

<?php
//Ejemplo 2: Array de letras (Arreglo indexado)
//Definir un arreglo con letras
$Letras = array ("A", "B", "C", "D", "E");

//Usamos un ciclo foreach para recorrer el arreglo e imprimir cada letra
foreach ($Letras as $letra) {
    echo "Letra: " . $letra . "\n";
}
?>

<?php
//Ejemplo 3: Array de números (Arreglo indexado)
//Declaramos un arreglo con numeros enteros y decimales
$numeros = array(10, 25.5, 30, 42.75);

//Mostramos valores individuales del arreglo
echo "Ejemplo 1: Primer número: " . $numeros[0] . "\n";
echo "Ejemplo 2: Segundo número: " . $numeros[1] . "\n";
echo "Ejemplo 3: Tercer numero: ". $numeros[2] . "\n";
echo "Ejemplo 4: Cuarto numero: ". $numeros[3] . "\n";

//Caluculamos la suma de todos los elementos 
$suma = array_sum($numeros);

//Contar cuantos elementos hay 
$cantidad = count($numeros);

//Calcular el promedio 
$promedio = $suma / $cantidad;

//Mostrar resultados
echo "\nSuma total: " . $suma . "\n";
echo "Cantidad de elementos: " . $cantidad . "\n";
echo "Promedio: " . number_format($promedio, 2) . "\n";

//Tambien podemos recorrelos con un bucle 
echo "\nListado completo de números: \n";
foreach ($numeros as $num) {
    echo $num . "\n";
}
?>

<?php
$numeros = array(10, 25.5, 30, 42.75);

//Mostramos valores individuales del arreglo
echo "Ejemplo 1: Primer número: " . $numeros[0] . "\n";
echo "Ejemplo 2: Segundo número: " . $numeros[1] . "\n";
echo "Ejemplo 3: Tercer numero: ". $numeros[2] . "\n";
echo "Ejemplo 4: Cuarto numero: ". $numeros[3] . "\n";

//Caluculamos la suma de todos los elementos 
$suma = array_sum($numeros);

//Contar cuantos elementos hay 
$cantidad = count($numeros);

//Calcular el promedio 
$promedio = $suma / $cantidad;

//Mostrar resultados
echo "\nSuma total: " . $suma . "\n";
echo "Cantidad de elementos: " . $cantidad . "\n";
echo "Promedio: " . number_format($promedio, 2) . "\n";
?>