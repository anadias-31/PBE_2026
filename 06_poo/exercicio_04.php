<?php
class Pedido{
    public $numero;
    public $cliente;
    public $valor;
    public $status;


    function adicionarItem($valor){
        if ($this->status == "Aguardando"){
           $this->valor += $valor; 
           echo"O valor total é R$$this->valor <br>";
        }else{
            echo"Não podemos adicionar items. O pedido está $this->status <br>";
        }
    }

    function cancelar(){
        $this->status="Cancelado";
        echo "Status alterado para $this->status <br>";
    }

    function finalizar(){
        $this->status="Finalizado";
        echo "Status alterado para $this->status <br>";
    }


    function exibirResumo(){
        echo "Numero:".$this->numero."<br>";
        echo "Cliente:".$this->cliente. "<br>";
        echo "Valor:".$this->valor."<br>";
        echo "Status:".$this->status."<br>";
    }

}
$pedido1=new Pedido();
    $pedido1->numero="1";
    $pedido1->cliente="Ana";
    $pedido1->valor="250";
    $pedido1->status="Aguardando";

echo"Numero de pedido: ".$pedido1->numero."<br>";
echo"Cliente: ".$pedido1->cliente."<br>";
echo"Valor: ".$pedido1->valor."<br>";
echo"Status: ". $pedido1->status."<br>";
echo"<hr>";

$pedido2=new Pedido();
    $pedido2->numero="2";
    $pedido2->cliente="Pedro";
    $pedido2->valor="550";
    $pedido2->status="Finalizado";

echo"Numero de pedido: ".$pedido2->numero."<br>";
echo"Cliente: ".$pedido2->cliente."<br>";
echo"Valor: ".$pedido2->valor."<br>";
echo"Status: ". $pedido2->status."<br>";
echo"<hr>";

$pedido1-> adicionarItem(20);
$pedido1-> cancelar();
echo"<hr>";
$pedido1-> exibirResumo();





?>