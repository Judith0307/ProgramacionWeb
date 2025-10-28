<?php
$i = 1;
while ($i <= 10){
    echo "El valor de i es: $i \n";
    $i++;
} 
?>

<?php
$i = 1;
while ($i <= 100){
    echo "Numero: $i \n";
    $i++;
} 
?>

<?php
//Sumar los numeros del 1 al 10 usando while
$i = 1;
$suma = 0;
while ($i <= 10){
    $suma += $i; //Suma $i a $suma
    $i ++; //Incrementamos $i
}
echo "La suma de los numeros del 1 al 10 es: ". $suma;
?>
