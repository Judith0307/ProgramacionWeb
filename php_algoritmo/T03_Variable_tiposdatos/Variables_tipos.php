<?php
$edad = 25;                //Variable de tipo entero
$precio = 19.99;          //Variable de tipo flotante
$nombre = "Maria";       //Variable de tipo cadena
$es_estudiante = true;  //Variable de tipo booleano

$colores = array("rojo","verde","azul");  //Variable de tipo array
$dias = ["lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo"];

//Declaracion de una variable tipo objeto
class persona {
    public $nombre;
    public $edad;
}
    $persona = new persona();  //Objeto de la clase persona
        $persona->nombre = "Juan";
        $persona->edad = 30;
    
    $nada = null; //Variable del tipo null

    //Mostrar los calores y tipos de las variables 
    echo "Edad: " . $edad . "<br>";
    echo "Precio: ". $precio ."<br>";
    echo "Nombre: ". $nombre ."<br>";
    echo "Es estudiante: ". ($es_estudiante ? 'Si' : 'No') ."<br>";
    echo "Colores: ". implode(", ", $colores)  ."<br>";
    

    //echo "Persona: Nombre - " . $persona -> nombre . ", Edad - " . $persona -> edad . "<br>";
    echo "Persona: " . $persona->nombre . ", Edad - " . $persona -> edad ."<br>";
    echo"Nada: ". var_export($nada . true). "<br>";

?>