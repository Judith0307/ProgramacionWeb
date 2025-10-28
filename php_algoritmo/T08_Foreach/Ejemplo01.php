<?php
$frutas = ["Manzana", "Naranja", "Platano"];

foreach ($frutas as $fruta) {
    echo "Fruta: $fruta  \n"; 
}

//Capturar el valor 
echo $frutas[2];
?>

<?php
//Ejemplo 02:
$colores = array("Rojo", "Verde", "Azul", "Amarillo");
foreach ($colores as $color) {
    echo "Color: " . $color . "\n";
}
echo $colores[2];
?>

<?php
//Ejemplo 03:
$persona = array (
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => 30
);
foreach ($persona as $clave => $valor) {
    echo $clave .": ". $valor ."\n";
}
?>

<?php
/*Crear un arreglo asociativo de nombre productos: debe tener el codigo, la descripcion, el precio, la cantidad y la fecha*/
$productos = array (
    "Codigo"=> 521478,
    "Descripcion"=> "Laptop HP",
    "Precio"=> 1200,
    "Cantidad"=> 82,
    "Fecha"=> "14/02/2025"
);

echo $productos["Precio"] . "\n";

foreach ($productos as $clave => $valor) {
    echo $clave .": ". $valor ."\n";
}
?>