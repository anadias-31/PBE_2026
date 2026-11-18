
<?php

class Matricula {
    private Aluno $aluno;
    private  $plano;
    private  $meses;
    private  $modalidades;

    public function __construct(Aluno $aluno, $plano, $meses, $modalidades) {
        $this->aluno = $aluno;
        $this->plano = $plano;
        $this->meses = $meses;
        $this->modalidades = $modalidades;
    }

    public function getAluno() {
        return $this->aluno;
    }

    public function getPlano() {
        return $this->plano;
    }

    public function getMeses() {
        return $this->meses;
    }

    public function getModalidades() {
        return $this->modalidades;
    }

    public function calcularValorPlano() { 

        if ($this->plano == "Básico") {
            return 80;
        }
        else if ($this->plano == "Plus") {
            return 120;
        }
        else {
            return 180;
        }
    }

    public function calcularValorModalidade($modalidade) {

        if ($modalidade == "natacao") {
            return 60;
        }
        else if ($modalidade == "funcional") {
            return 40;
        }
        else if ($modalidade == "lutas") {
            return 50;
        }
        else {
            return 0;
        }
    }

    public function calcularMensalidade() {

        $valor = $this->calcularValorPlano();

        foreach ($this->modalidades as $modalidade) {
            $valor = $valor + $this->calcularValorModalidade($modalidade);
        }

        return $valor;
    }

    public function calcularPercentualDesconto() {

        if ($this->meses >= 12) {
            return 20;
        }
        else if ($this->meses >= 6) {
            return 10;
        }
        else {
            return 0;
        }
    }

    public function calcularSubtotal() {
        return $this->calcularMensalidade() * $this->meses;
    }

    public function calcularDesconto() {

        $desconto = $this->calcularSubtotal() *
        $this->calcularPercentualDesconto() / 100;

        return $desconto;
    }

    public function calcularTotal() {
        return $this->calcularSubtotal() - $this->calcularDesconto();
    }

}

?>