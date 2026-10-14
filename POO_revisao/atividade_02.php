<?php
class Carro{
    private $modelo;
    private $velocidade;

    public function __construct($modelo, $velocidade=0){
        $this->modelo = $modelo;
        $this->velocidade= $velocidade;
    }

    public function acelerar(){
        $this->velocidade += 10;
    }

    public function frear(){
        $this->velocidade -= 10;
    }

    public function verVelocidade(){
        echo "$this->velocidade km/h <br>";
    }
}

$carro= new Carro ("BMW", 20);
$carro->verVelocidade();
echo "<hr>";

$carro->frear();
$carro->verVelocidade();
echo "<hr>";

$carro->acelerar();
$carro->verVelocidade();
echo "<hr>";
?>