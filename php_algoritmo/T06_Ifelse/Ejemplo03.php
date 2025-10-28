<?php
/*La institucion educativa desea un programa que permita calcular el promedio final de un alumno en determinado curso. 
Se deben ingresar los datos: 
-Nombre del alumno 
-Nombre del curso 
-4 notas
El sistema debe calcular el promedio y determinar
-Si el promedio es mayor a 10 -> 
*/
$nombre = (String)readline("Ingrese el nombre del alumno: ");
$curso = (String)readline("Ingrese el nombre del curso: ");
$nota1 = (int)readline("Ingrese la primera nota: ");
$nota2 = (int)readline("Ingrese la segunda nota: ");
$nota3 = (int)readline("Ingrese la tercera nota: ");
$nota4 = (int)readline("Ingrese la cuarta nota: ");

$promedio = ($nota1 + $nota2 + $nota3 + $nota4)/4;

echo "\n===================RESULTADO FINAL===================\n";
echo "Alumno: $nombre\n";
echo "Curso: $curso\n";
echo "Promedio final: " .number_format($promedio, 2). "\n";

if ($promedio > 11){
    echo "Estado: APROBADO";
}else {
    echo "Estado: DESAPROBADO";
}
?>
