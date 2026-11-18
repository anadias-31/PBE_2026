<?php 
session_start();

$nome = $_POST ['nome'];
$curso = $_POST ['curso'];

$_SESSION['nome'] = $nome;
$_SESSION['curso'] = $curso;


$_SESSION['turma'][]=[
    'nome' => $nome,
    'curso' => $curso
];

echo "<a href='view_relatorio.php'> Ver o relatório </a>";

?>