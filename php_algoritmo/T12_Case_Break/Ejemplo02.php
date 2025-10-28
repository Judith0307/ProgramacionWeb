<?php
//Operaciones matematicas en consola usando switcj, case y break
echo "Ingrese el primer numero: ";
$numero1 = trim(fgets(STDIN)); //Leer el numero desde la consola

echo "Ingrese el segundo numero: ";
$numero2 = trim(fgets(STDIN));

echo "Ingrese la operacion (sumar, restar, multiplicar, dividir): ";
$operacion = trim(fgets(STDIN));

switch ($operacion) {
    case "sumar":
        $resultado = $numero1 + $numero2;
        echo "El resultado de sumar $numero1 y $numero2 es: ". $resultado . PHP_EOL;
        break;
    case "restar":
        $resultado = $numero1 - $numero2;
        echo "El resultado de restar $numero1 y $numero2 es: ". $resultado . PHP_EOL;
        break;
    case "multiplicar":
        $resultado = $numero1 * $numero2;
        echo "El resultado de multiplicar $numero1 y $numero2 es: ". $resultado . PHP_EOL;
        break;
    case "dividir":
        if ($numero2 != 0){
            $resultado = $numero1 / $numero2;
            echo "El resultado de dividir $numero1 y $numero2 es: ". $resultado . PHP_EOL;
        } else {
            echo "No se puede dividir por cero." . PHP_EOL;
        }
        break;
    default:
    echo "Operacion invalida". PHP_EOL;
    break;
}
?>