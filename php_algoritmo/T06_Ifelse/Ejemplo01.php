<?php
$numero = (float) readline("Ingrese un numero: ");

if ($numero > 0) {
    echo "Ejemplo 1: El numero es positivo \n"; 
} elseif ($numero < 0) {
    echo "Ejemplo 2: El numero es negativo \n";
} else {
    echo "Ejemplo 3: El numero es cero \n";
}
?>

<?php
/*Determina cual de los dos productos es el de mayor costo: El producto A 4500 y el producto B 5650*/
$productoA = 4500;
$productoB = 5650;

if( $productoA > $productoB ) {
    echo "El producto A es el de mayor costo\n";
} else {
    echo "El producto B es de mayor costo\n";
}
?>

