<?php
class Pedido {
    private $cliente;
    private $valorItens;

    public function __construct($cliente, $valorItens = 0) {
        $this->cliente = $cliente;
        $this->valorItens = $valorItens;
    }

    public function adicionarItens($valor) {
        $this->valorItens += $valor;
        echo "Total: $this->valorItens <br>";
    }
    
    public function getTotal() {
        return $this->valorItens;
    }

    public function exibirPedido() {
        echo "Cliente: $this->cliente <br>";
        echo "- Total dos itens: R$ $this->valorItens <br>";
    }
}

class NotaFiscal {
    private $totalPedido;
    private $imposto;
    private $totalPagar;

    public function __construct($totalPedido, $imposto = 10) {
        $this->totalPedido = $totalPedido;
        $this->imposto = $imposto;
        $this->totalPagar = 0; 
    }

    
    public function calcularTotal() {
        $this->totalPagar = $this->totalPedido + ($this->totalPedido * ($this->imposto / 100));
    }

    public function exibirNota() {
        echo "Subtotal: R$ $this->totalPedido <br>";
        echo "Imposto: $this->imposto% <br>"; 
        echo "Total a pagar: R$ $this->totalPagar <br>"; 
    }
}


$pedido = new Pedido("Ana Lara", 200);
$pedido->exibirPedido();
$pedido->adicionarItens(20);
$pedido->exibirPedido();

echo "<hr>";

$nota = new NotaFiscal($pedido->getTotal(), 8);
$nota->calcularTotal(); 
$nota->exibirNota();
?>