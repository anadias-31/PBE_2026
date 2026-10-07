<?php
class ContaBancaria{
    public $titular;
    public $saldo;

    public function __construct ($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }

    public function depositar($valor){
        $this->saldo += $valor;
    }

    public function sacar($valor){
        $this->saldo -= $valor;
    }

    public function exibirSaldo(){
        echo "Titular: $this->titular <br>";
        echo "Saldo: $this->saldo <br>";
       
    }
}

$conta1= new ContaBancaria ("Ana", 1200);
$conta1 -> depositar(200);
$conta1 -> sacar(300);
$conta1 -> exibirsaldo();
?>