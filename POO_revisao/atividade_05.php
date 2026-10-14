<?php
class Turma{
    private $nome;
    private $professor;
    private $qtdAlunos;
    private $capacidade;

    public function __construct($nome, $professor, $qtdAlunos=0, $capacidade){
        $this->nome = $nome;
        $this->professor = $professor;
        $this->qtdAlunos = $qtdAlunos;
        $this->capacidade = $capacidade;
    }

    public function adicionarAluno(){
        if ($this->qtdAlunos < $this->capacidade){
            $this->qtdAlunos += 1;
        }else{
            "Não é possivel adicionar alunos, já foi atingida a capacidade Maxima <br>";
        }
    }

    public function removerAluno(){
        if ($this->qtdAlunos > 0){
            $this->qtdAlunos -= 1;
        }else{
            "Não é possivel remover aluno";
        }
    }

    public function exibirTurma (){
        echo "Turma: $this->nome <br> Professor: $this->professor <br> Alunos: $this->qtdAlunos";
    }
}

$turma= new Turma ("2°A", "leonardo", 31, 32);
$turma->adicionarAluno();
$turma->exibirTurma();



?>