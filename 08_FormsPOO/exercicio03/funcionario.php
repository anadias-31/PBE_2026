<?php
class Funcionario{
    private $nome;
    private $cargo;
    private $horasExtras;
    private $valeTransporte;
    private $salarioBase;

    public function __construct($nome,$cargo,$horasExtras,$valeTransporte){
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->horasExtras = $horasExtras;
        $this->valeTransporte= $valeTransporte;
        $this->salarioBase = $this->DefinirSalarioBase();
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCargo(){
        return $this->cargo;
    }

    public function getHorasExtras(){
        return $this->horasExtras;
    }

    public function getSalarioBase(){
        return $this->salarioBase;
    }

    public function DefinirSalarioBase(){
        if ($this->cargo == "auxiliar" ){
            return $this->salarioBase = 2200;
        }else if ($this->cargo == "tecnico"){
            return $this->salarioBase = 3520;
        }else{
            return $this->salarioBase = 5500;
        }
    }

    public function CalcularHorasExtras(){
        return ($this->salarioBase / 220) * 1.5 * $this->horasExtras;
    }

    public function CalcularSalarioBruto(){
        return $this->salarioBase + $this->CalcularHorasExtras();
    }

    public function CalcularPercentualINSS(){
        $bruto = $this->CalcularSalarioBruto();
        if ($bruto <= 2500){
            return 8;
        } else if ($bruto <= 5000){
            return 10;
        } else {
            return 12;
        }
    }

    public function CalcularINSS(){
        return $this->CalcularSalarioBruto() * ($this->CalcularPercentualINSS() / 100);
    }

    public function CalcularValeTransporte(){
        if ($this->valeTransporte == "sim"){
            return $this->CalcularSalarioBruto() * 0.06;
        }
        return 0;
    }

    public function CalcularSalarioLiquido(){
        return $this->CalcularSalarioBruto() - $this->CalcularINSS() - $this->CalcularValeTransporte();
    }
}
?>