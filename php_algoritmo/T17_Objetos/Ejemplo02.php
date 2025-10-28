<?php
class Triangulo {
    public $base;
    public $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea(){
        return ($this->base * $this->altura) / 2;
    }
}

$miTriangulo = new Triangulo (10, 5);
echo "El area es: ". $miTriangulo->calcularArea();
?>