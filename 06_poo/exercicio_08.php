<?php
class Funcionario{
    private $nome;
    private $salario;

    public function __construct($nome,$salario=1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
    if ($percentual >0 && $percentual <= 10){
        $this->salario= ($this->salario * $percentual)/100;
    }else{
        echo "Erro o intervalo permitido é entre 0 e 10";
    }
    }
    public function exibirSalario(){
        echo"Funcionário: $this->nome - Salário: R$$this->salario <br>";

    }
}
$func= new Funcionario ("Ana", 3000);
$func->aumentarSalario(10);
$func->exibirSalario();
?>