<?php
class Celular{
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

    function ligar(){
        $this->ligado = true;
        echo "O celular está ligado <br>";
    }

    function usar($consumo){
        $this->bateria = $this->bateria-$consumo;
        if($this-> bateria > 0){
            $this->bateria=0;
        }
    }

    function carregar($carga){
    $this->bateria = $this->bateria+$carga;
        if($this->bateria>100){
            $this->bateria=100;
        }
        echo "o celular está com $carga <br>";
        echo "o carregou e está com $this->bateria  <br>";
        
    }
 
    
    function desligar(){
    $this->ligado = false; 
    echo "o celular está desligado <br>";
    }
}

$celular1=new Celular();
    $celular1->marca="Iphone ";
    $celular1->modelo="17 pro max";
    $celular1->cor="Cherry";
    $celular1->bateria=87;
    $celular1->ligado=true;

echo"Marca: ".$celular1->marca."<br>";
echo"Modelo: ".$celular1->modelo."<br>";
echo"Cor: ".$celular1->cor."<br>";
echo"Bateria: ".$celular1->bateria."<br>";
echo"Ligado: ".$celular1->ligado."<br>";

$celular2=new Celular();
    $celular2->marca="xiaomi";
    $celular2->modelo="Redimi 15";
    $celular2->cor="gold";
    $celular2->bateria=50;
    $celular2->ligado=false;

echo"<hr>";
echo"Marca: ".$celular2->marca."<br>";
echo"Modelo: ".$celular2->modelo."<br>";
echo"Cor: ".$celular2->cor."<br>";
echo"Bateria: ".$celular2->bateria."<br>";
echo"Ligado: ".$celular2->ligado."<br>";
echo"<hr>";

$celular1->carregar(13);
$celular2->carregar(50);
$celular1->usar(20);
$celular2->desligar();

?>