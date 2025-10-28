<?php
//Variables locales
function Saludar(){
    $mensaje = "Hola, soy un variable local.";
    echo $mensaje;
}
Saludar();
echo $mensaje;  //Esto genera error porque $mensaje es una variable local
?>



<?php
//Variables globales
$saludo ="Hola, soy una variable global.";

function MostrarSaludo(){
    global $saludo;  //Declarar la variable global dentro de la funcion
    echo $saludo . "<br>";
}
MostrarSaludo(); //Esto imprimira: Hola, soy una variable global.
?>



<?php
//Otro ejemplo de variable global: Realizar la multiplicacion de dos numeros, y las demas operaciones
$numero1 = 10;
$numero2 = 5;

function Operaciones(){
    global $numero1 , $numero2;
    $multiplicacion = $numero1 * $numero2;
    $division = $numero1 / $numero2;
    $suma = $numero1 + $numero2;
    $resta = $numero1 - $numero2;

    echo "El resultado de la multiplicaion es: " . $multiplicacion . "<br>";
    echo "El resultado de la division es: " . $division . "<br>";
    echo "El resultado de la suma es: " . $suma . "<br>";
    echo "El resultado de la resta es: " . $resta;
}
Operaciones();
?>
