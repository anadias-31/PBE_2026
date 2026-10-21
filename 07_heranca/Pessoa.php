<?php
class Pessoa{
    protected $nome;
    protected $email;

    public function __construct($nome, $email){
        $this->nome = $nome;
        $this->email = $email;
    }

    //MÉTODO QUE BUSCA E RETORNA O NOME DO OBJETO
    //get=retorna o nome
    public function getNome(){
        return$this->nome;
    }

    //MÉTODO QUE UTILIZA O NOME 
    //set=recebe o nome 
    public function setNome(){
        $this->nome = $nome;
    }

    //MÉTODO QUE BUSCA E RETORNA O EMAIL DO OBJETO
    public function getEmail(){
        return $this->email;
    }

    //MÉTODO PARA UTILIZAR O EMAIL
    public function setEmail(){
        $this->email = $email;
    }

    //MÉTODO PARA EXIBIR TODOS OS DADOS
    //Normalmente chamado de toString()
    public function exibirDadosPessoa(){
        echo "Nome: $this->nome <br> Email:$this->email<br>";
    }
}
?>