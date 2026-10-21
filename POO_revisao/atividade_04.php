<?php
class Paciente {
    private $nome;
    private $idade;
    private $peso;
    private $altura;
    private $calculoIMC; 

    public function __construct($nome, $idade, $peso, $altura) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function calcularIMC() {
        $this->calculoIMC = $this->peso / ($this->altura * $this->altura);
        return $this->calculoIMC;
    }

    public function classificarIMC() {
        if ($this->calculoIMC < 18.5) {
            return "Baixo peso";
        } else if ($this->calculoIMC >= 18.5 && $this->calculoIMC <= 24.99) {
            return "Normal";
        } else if ($this->calculoIMC >= 25 && $this->calculoIMC <= 29.99) {
            return "Sobrepeso";
        } else {
            return "Obesidade";
        }
    }

    public function exibirFicha() {
        $imcFormatado = number_format($this->calculoIMC, 2, ',', '.');
        echo "Paciente: $this->nome <br>";
        echo "Idade: $this->idade anos <br>";
        echo "IMC: $imcFormatado <br>";
        echo "Classificação: " . $this->classificarIMC() . "<br>";
    }
}

$paciente = new Paciente("Ana Lara", 16, 78, 1.71);
$paciente->calcularIMC();
$paciente->exibirFicha();
?>