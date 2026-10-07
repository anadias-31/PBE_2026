<?php
class Aula{
    public $disciplina;
    public $professor;
    public $duracao;
    public $n_sala;
    public $bloco;

    function exibirInformacoes(){
        echo "Disciplina:$this->disciplina <br>";
        echo "Professor:$this->professor <br>";
        echo "Duração:$this->duracao <br>";
        echo "Numero da sala:$this->n_sala<br>";
        echo "Bloco:$this->bloco <br>";
    }

    function trocarProfessor($professor){
        $this->professor = $professor;
        echo "Professor alterado, agora o professor $this->professor ministrará a aula <br>";
    }

    function alterarLocal($n_sala,$bloco){
        $this->n_sala =$n_sala;
        $this->$bloco = $bloco;
        echo "O local foi alterado par bloco $this->bloco no numero $this->n_sala <br> ";
    }

}
$aula1=new aula();
    $aula1->disciplina="LM";
    $aula1->professor="Gabriel";
    $aula1->duracao="250 mim";
    $aula1->n_sala="1";
    $aula1->bloco="2";

echo"Disciplina: ".$aula1->disciplina."<br>";
echo"Professor: ".$aula1->professor."<br>";
echo"Duração: ".$aula1->duracao."<br>";
echo"Numero da sala: ".$aula1->n_sala."<br>";
echo"Bloco: ".$aula1->bloco."<br>";
echo"<hr>";

$aula2=new aula();
    $aula2->disciplina="PBE";
    $aula2->professor="Leonardo";
    $aula2->duracao="350 mim";
    $aula2->n_sala="1";
    $aula2->bloco="2";

echo"Disciplina: ".$aula2->disciplina."<br>";
echo"Professor: ".$aula2->professor."<br>";
echo"Duração: ".$aula2->duracao."<br>";
echo"Numero da sala: ".$aula2->n_sala."<br>";
echo"Bloco: ".$aula2->bloco."<br>";
echo"<hr>";

$aula1->trocarProfessor("Luiz");
$aula1->alterarLocal(5,1);
echo"<hr>";
$aula1->exibirInformacoes();



?>