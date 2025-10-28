<?php
$a= 10;
$b= 5;
//Operadores Aritmeticos
$suma = $a + $b;             //Suma
$resta = $a - $b;           //Resta
$multiplicacion = $a * $b; //Multiplicacion
$division = $a / $b;      //Division

echo"Suma: " . $suma . "<br>";
echo "Resta: " . $resta . "<br>";
echo "Multiplicacion: "  . $multiplicacion . "<br>";
echo "Division: " . $division . "<br>";
?>

<?php
/*Determina el total a pagar, considerando que el salario por mes es 3500 y al trabajador se le debe de 14 meses*/
$nombre = "Adrian Martinez";
$SalarioMes = 3500;
$deuda = 14;

$Pago = $SalarioMes * $deuda;

echo"El salario a pagar al trabajador ". $nombre ." es de ". $Pago . " soles.";
?>
