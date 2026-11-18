<?php
session_start();

$_SESSION['nome'] = "Ana";
$_SESSION['curso'] = "Desenvolvimento de sistemas";

echo "<h4>Primeira Print</h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// Criar uma lista adicionando valores
$_SESSION['turma'][] = [
    "nome" => "Maria",
    "curso" => "ADS"
];

$_SESSION['turma'][] = [
    "nome" => "José",
    "curso" => "ID"
];

echo "<h4>Segundo Print</h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

echo "<a href=deletar.php'>Apagar</a><br>";
echo "<a href=view_relatorio.php'>Exibir dados</a>";


