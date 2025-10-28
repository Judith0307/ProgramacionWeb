<?php
class CuentaBancaria{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldoInicial = 0){
        $this->titular = $titular;
        $this->saldo = $saldoInicial;
    }

    public function depositar ($monto){
        if ($monto > 0){
            $this->saldo += $monto;
            echo"Deposito de $$monto realizado.\n";
        }else {
            echo"Monto invalido para depositar.\n";
        }
    }

    public function retirar($monto){
        if ($monto > 0 && $monto <= $this->saldo){
            $this->saldo -= $monto;
            echo "Retiro de $monto realizado.\n";
        }else {
            echo "Fondos insuficientes o monto invalido.\n";
        }
    }

    public function mostrarSaldo(){
        echo"Saldo actual de {$this->titular}: $$this->saldo.\n";
    }
}

//Crear objeto cuenta 
$cuenta = new CuentaBancaria ("Carlos", 1000);

//Operaciones 
$cuenta->mostrarSaldo();
$cuenta->depositar(500);
$cuenta->retirar(3000);
$cuenta->retirar(1500);
$cuenta->mostrarSaldo();
?>