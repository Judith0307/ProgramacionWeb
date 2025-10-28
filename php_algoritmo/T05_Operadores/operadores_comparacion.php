<?php
/*Operadores de comparacion*/
/*$a = 7;
$b = 8;*/

$esIgual = ($a == $b); //gual a
$esDistinto = ($a != $b); //Distinto de
$esMayor = ($a > $b); //Mayor que
$esMenor = ($a < $b); //Menor que
$esMayorIgual = ($a >= $b); //Mayor o igual que 
$esMenorIgual = ($a <= $b); //Menor o igual que 

/*Imprimirlo*/
echo "Es igual: " . ($esIgual ? 'Si' : 'No') . "\n";
echo "Es distinto: " . ($esDistinto ? 'Si' : 'No') . "\n";
echo "Es mayor: ". ($esMayor ? "Si": "No") . "\n";
echo "Es menor: ". ($esMenor ? "Si": "No") . "\n";
echo "Es mayor o igual: ". ($esMayorIgual ? "Si": "No") . "\n";
echo "Es menor o igual: ". ($esMenorIgual ? "Si": "No") . "\n";

/*Evalua si el salario de los empleados son iguales, o evalua quien de ellos a ganado mas y cual es la diferencia
El empleado A ha percibido durante el año 12500 y el empleado B 13500, Asi mismo el empleado C ha percibido 12500
y el empleado D 12500, se solicita comprarar A y B para determinar quien ha ganado mas, luego comparar A y C
para determinar si han ganado lo mismo*/
$a = 12500;
$b = 13500;
$c = 12500;
$d = 12500;

$esIgualAC = ($a == $c);

$esMayor = ($a == $b);
if ($a > $b) {
    $diferencia = $a - $b;
    echo "El empleado A gano mas que el empleado B, y su diferencia es de " . $diferencia . "\n";
} else {
    $diferencia = $b - $a;
    echo "El empleado B gano mas que el empleado A y su diferencia es de " . $diferencia . "\n";
}

echo "Ganaron lo mismo el empleado A y C: " . ($esIgualAC ? 'Si' : 'No') . "\n";

/*Operadores logicos*/
$yLogico = ($a > 5) && ($b < 10);  //AND y logico
echo "Resultado AND logicos: ". ($yLogico ? 'Verdadero' : 'Falso') . "\n";

$oLogico = ($a > 5) || ($b < 10);  //OR o logico
echo "Resultado OR logicos: ". ($oLogico ? 'Verdadero' : 'Falso') . "\n";

?>

<?php
/*Operadores de asignacion*/
$c = 10;
$c += 5;
//$b += 5; //Equivalente a $c = $c + 5
//echo "Valor final de b: " . $b . "\n";

$c -= 3; //Equivalente a $c = $c - 3
$c *= 2; //Equivalente a $c = $c * 2
$c /= 4; //Equivalente a $c = $c / 4
echo "Valor final de c: " . $c . "\n";

/*Operadores de incremento y decremento */
$d = 5;
echo "d antes del incremento: ". $d . "\n";
echo "d Incremento de d (pre-incremento): " . (++$d) . "\n"; //Pre-incremento
echo "d despues del decremento: " . (--$d) . "\n";  //Pre-decremento
?>