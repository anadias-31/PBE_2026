<?php
class Livro {
    public $titulo;
    public $autor;
    public $paginas;
    public $ano_publicacao;

    public function __construct($titulo, $autor, $paginas, $ano_publicacao="Desconhecido"){
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ano_publicacao = $ano_publicacao;     
    }

    public function exibirDetalhes(){
        echo "<b>Título:</b> $this->titulo, <b>Autor:</b> $this->autor, <b>Páginas:</b> $this->paginas, <b>Ano de publicação:</b> $this->ano_publicacao <br>";
    }
} 

$livro1 = new Livro("Memórias Póstumas de Brás Cubas", "Machado de Assis", 300);
$livro1->exibirDetalhes();

$livro2 = new Livro("É assim que acaba", "Colleen Hoover", 256, 2016);
$livro2->exibirDetalhes();
?>
