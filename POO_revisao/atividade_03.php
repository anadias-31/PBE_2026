<?php 
class Filme{
    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao, $assistido=false){
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assitido= $assistido;
    }

    public function marcarComoAssistido(){
        if ($this->assistido == true){
            echo "Você já assitiu <br>";
        }else{
            echo "Você ainda não assistiu <br>";
        }
    }

    public function exibirInformacao(){
        echo "Título: $this->titulo <br>";
        echo "Gênero: $this->genero <br>";
        echo "Duração: $this->duracao mim <br>";
        echo "Assitido: $this->assistido <br>";
    }
}

$filme1= new Filme ("A culpa é das estrelas", "Romance", 120, "Sim" );
$filme1-> exibirInformacao();
$filme1-> marcarComoAssistido(true);

echo "<hr>";

$filme2= new Filme ("Matriz", "Ficção", 145, "Não" );
$filme2-> exibirInformacao();
$filme2-> marcarComoAssistido(false);

?>