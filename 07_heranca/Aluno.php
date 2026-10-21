<?php
require_once "Pessoa.php";
class Aluno extends Pessoa{
    private $matricula;
    private $notas=[]; //NOTAS é UM ARRAY(LISTA)

    public function __construct($nome,$email,$matricula){
        //CONSTRUTOR DA CLASSE PESSOA
            parent::__construct($nome, $email);
            $this->matricula = $matricula;
    }

    //ADICIONAR NOTA(NUMERO)A LISTA DE NOTAS
    public function adicionarNota($nota){
            $this->notass[] = $nota;
    }
    
    public function calcularMedia(){
        //VERIFICA A QUANTIDADE DE NOTAS
        //SE FOR 0 JÁ PARA A EXECUÇÃO, E SAI DO MÉTODO SEM FAZER CONTA
        if(count($this->notas)==0)return 0;
        //SÓ SERÁ CALCULADO SE TIVER QUANTIDADE E NOTAS > 0
        return array_sum($this->notas)/ count($this->notas);
        //array_sum() = SOMA TODOS OS ITEMS DA LISTA DE NOTAS
        //count = PEGA A QUANTIDADE DE ITEMS DA LISTA
    }

    public function verificarSituacao(){
        return $this->calcularMedia() >= 7  ? "Aprovado":"Reprovado";
        /* 
           $media = $this->calcularMedia();
           if ($media >= 7){
            return "Aprovado";
           }else{
            retun "Reprovado";
          }
        */
    }

    public function exibirDadosAluno(){
        parent:: exibirDadosPessoa();
        echo "Matricula: $this->matricula <br>";
        echo "Média: " .number_format($this->calcularMedia(),2). "<br>";
        echo "Situação: ".$this->verificarSituacao(). "<br><hr>";
    }
    
}

?>