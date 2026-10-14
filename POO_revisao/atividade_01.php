<?php 
class Aluno{
    private $nome;
    private $nota;

    public function __construct($nome, $nota=0){
        $this->nome= $nome;
        $this->nota= $nota;
    }

    public function getStatus(){
        if ($this->nota >= 6){
            echo"Aprovado <br>";
        }else{
            echo"Reprovado <br>";
        }
    }
}
$aluno1= new Aluno ("Ana", 10);
echo "<pre>";
print_r($aluno1);
echo "</pre>";
$aluno1->getStatus();

$aluno2= new Aluno("pedro", 5);
echo "<pre>";
print_r($aluno2);
echo "</pre>";
$aluno2->getStatus();
?>