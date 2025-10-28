<?php
/*$mes = (int) readline("Ingrese un numero: ");

if ($mes == 1) {
    echo "Enero";
} else if ($mes == 2) { 
    echo "Febrero";
} else if ($mes == 3) {
    echo "Marzo";
} else if ($mes == 4) {
    echo "Abril";
} else if ($mes == 5) {
    echo "Mayo";
} else if ($mes == 6) {
    echo "Junio";
} else if ($mes == 7) {
    echo "Julio";
} else if ($mes == 8) {
    echo "Agosto";
} else if ($mes == 9) {
    echo "Septiembre";
} else if ($mes == 10) {
    echo "Octubre";
} else if ($mes == 11) {
    echo "Noviembre";
} else if ($mes == 12) {
    echo "Diembre";
} else {
    echo conn_error();
}*/
?>

<?php
/*La empresa PANDABI requiere tener una lista para sus clientes de sus 10 primeros productos en la que 
se debe mostrar el precio del producto, la descripcion y las ofetas. Implementa el programa utilizando if y else aninado */ 
$producto = (int) readline("Ingrese un numero: ");

if ($producto == 1) {
    echo "Descripcion: Pan\n";
    echo "Precio: 5.00";
    echo "Ofertas: 5%";
} else if ($producto == 2) { 
    echo "Descripcion: Pan de queso\n";
    echo "Precio: 6.00\n";
    echo "Ofertas: 3%\n";
} else if ($producto == 3) {
    echo "Descripcion: Pan de mantequilla\n";
    echo "Precio: 5.00\n";
    echo "Ofertas: 5%\n";
} else if ($producto == 4) {
    echo "Descripcion: Pan de molde\n";
    echo "Precio: 2.00\n";
    echo "Ofertas: 5%\n";
} else if ($producto == 5) {
    echo "Descripcion: Croissant\n";
    echo "Precio: 3.00\n";
    echo "Ofertas: 3%\n";
} else if ($producto == 6) {
    echo "Descripcion: Pan\n";
    echo "Precio: 2.00\n";
    echo "Ofertas: 4%\n";
} else if ($producto == 7) {
    echo "Descripcion: Pan";
    echo "Precio: 4.00\n";
    echo "Ofertas: 6%\n";
} else if ($producto == 8) {
    echo "Descripcion: Pan";
    echo "Precio: 5.00\n";
    echo "Ofertas: 2%\n";
} else if ($producto == 9) {
    echo "Descripcion: Pan\n";
    echo "Precio: 6.00\n";
    echo "Ofertas: 6%\n";
} else if ($producto == 10) {
    echo "Descripcion: Pan\n";
    echo "Precio: 5.00\n";
    echo "Ofertas: 4%\n";
} else {
    echo conn_error();
}
?>