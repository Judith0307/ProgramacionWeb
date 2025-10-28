<?php
/*La ama de casa va al supermercado y compra 6 productos: A, B, C, D, E y F. Cada producto tiene un precio determinado que ella debe ingresar en el sistema. 
El progrma debe: 
-Pedir el precio de cada producto
-Calcular el total a pagar
-Mostrar en pantalla cada producto con su respectivo precio
-Comparar rl total con su presupuesto de s/1000.00 y calcular cuanto dinero le sobra despues de la compra.*/
$presupuesto = 1000.00;

echo "Ingrese el precio del producto A: ";
$A = (float)readline();

echo"Ingrese el precio del producto B: ";
$B = (float)readline();

echo "Ingrese el precio del producto C: ";
$C = (float)readline();

echo "Ingrese el precio del producto D: ";
$D = (float)readline();

echo "Ingrese el precio del producto E: ";
$E = (float)readline();

echo "Ingrese el precio del producto F: ";
$F = (float)readline();

//Calcular la suma de precios
$total = $A + $B + $C + $D + $E + $F;

//Calcular el dinero sobrante o faltante
$sobrante = $presupuesto - $total;

//Mostrar el resultado final 
echo "\n ===================================================\n";
echo "                BOLETA DE COMPRA                        ";
echo "\n ===================================================\n";
echo "Producto A: s/$A \n";
echo "Producto B: s/$B \n";
echo "Producto C: s/$C \n";
echo "Producto D: s/$D \n";
echo "Producto E: s/$E \n";
echo "Producto F: s/$F \n";
echo "---------------------------------------------\n";
echo "Total a pagar: s/$total \n";
echo "Presupuesto disponible: s/$presupuesto \n";

//Validar si hay dinero sobrante o faltante
if ($total <= $presupuesto) {
    echo "Compra realizada con exito: \n";
    echo "El dinero sobrante es: $sobrante \n";
}else {
    $faltante = $total - $presupuesto;
    echo "¡Atencion! Se paso del presupuesto en: $faltante \n";
}
?>