<?php 
class Aluno { 
    public $nome; 
    public $nota1; 
    public $nota2; 
    public $media; 

    public function __construct($nome, $nota1, $nota2) { 
        $this->nome = $nome; 
        $this->nota1 = $nota1; 
        $this->nota2 = $nota2; 
        $this->media = $this->calcularMedia(); 
    } 

    
    public function calcularMedia() { 
        $this->media = ($this->nota1 + $this->nota2) / 2; 
        echo "A média do Aluno é {$this->media} <br>"; 
        return $this->media;
    } 
} 
$aluno1 = new Aluno("Ana", 9, 8); 
echo "<prep>";
print_r($aluno1); 
echo "</prep>";

 
?>
