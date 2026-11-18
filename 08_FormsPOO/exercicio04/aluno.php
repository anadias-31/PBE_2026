<?php
class Aluno {

    private $nome;
    private $peso;
    private $altura;

    public function __construct($nome, $peso, $altura) {
        $this->nome = $nome;
        $this->peso = $peso;
        $this->altura = $altura;
    }

    public function getNome() {
        return $this->nome;
    }

    public function calcularIMC() {
        $imc = $this->peso / ($this->altura * $this->altura);
        return $imc;
    }

    public function classificarIMC() {

        $imc = $this->calcularIMC();

        if ($imc < 18.5) {
            return "Abaixo do Peso";
        } 
        else if ($imc < 25) {
            return "Peso Normal";
        } 
        else if ($imc < 30) {
            return "SobrePeso";
        } 
        else {
            return "Obesidade";
        }
    }
}

?>
