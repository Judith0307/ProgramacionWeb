<?php
class Persona {
    public $nombre;
    public $apellido;
    public $edad;
    public $direccion;

    //Constructor 
    public function __construct($nombre, $apellido, $edad, $direccion) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->edad = $edad;
        $this->direccion = $direccion;
    }

    public function saludar(){
        return "Hola, me llamo $this->nombre $this->apellido, tengo $this->edad y vivo en $this->direccion.";
    }
}

//Crear objeto
$persona = new Persona("Juan", "Perez", 30, "AV.Panamericana");
echo $persona -> saludar();
?>