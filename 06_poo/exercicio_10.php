<?php
class Carro{
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct ($modelo, $consumo=0, $tanqueinicial=10){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueinicial;
    }

    public function abastecer($litros){
        if ($litros >= 1){
            echo "Quantidade de $litros litro(s) abastecida. <br>";
        }else{
            echo "Erro não foi possível abastecer seu carro <br>";
        }
    }

    public function dirigir($km){
        function dirigir($Km) {
        $Combustivel = $Km / $this->Consumo;
        if ($Combustivel <= $this->Tanque) {
            $this->Tanque = $this->Tanque - $Combustivel;
            echo "O carro $this->Modelo percorreu $Km km e consumiu $Combustivel litros.<br>";
        } else {
            echo "Não há combustível suficiente para percorrer $Km km.<br>";
        }
    }
    }
    public function exibirInfo(){
        echo "Modelo: $this->modelo | Consumo: $this->consumo | Tanque: $this->tanque <br>";

    }
}

$carro= new Carro ("BMW x1", 12, 20);
$carro-> exibirInfo();
$carro-> dirigir(60);
$carro-> abastecer(10);
$carro-> exibirInfo();


?>