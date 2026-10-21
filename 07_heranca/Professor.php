<?php
require_once "Pessoa.php";
class Professor extends Pessoa{
    private $disciplina;

    public function __construct($nome, $email, $disciplina){
        $this->disciplina = $disciplina;
        //EXECUTA O CONSTRUTOR DA CLASSE PESSOA
        //PASSANDO SEUS ATRIBUTOS
        parent::__construct($nome,$email);
    }

    //MÉTODO PARA BUSCAR A DISCIPLINA
    public function getDisciplina(){
        return $this->disciplina;
    }

    //EXIBIR DADOS DO PROFESSOR
    public function exibirDadosProfessor(){
        //EXIBI DADOS DA CLASSE PESSOA 
        parent::exibirDadosPessoa();
        echo "Disciplina $this->disciplina <br><hr>";
    }



}
?>
