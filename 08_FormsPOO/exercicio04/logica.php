<?php
require_once "aluno.php";
require_once "matricula.php";

$nome = $_POST ['nome'];
$peso = $_POST ['peso'];
$altura= $_POST ['altura'] ?? 0;
// Se o campo não existir assumi o valor 0
$plano= $_POST ['plano'];
$meses= $_POST ['meses'];

$modalidades= $_POST ['modalidades'] ?? [];
// ?? Faz com que se não existir um valor, ele atibui o valor 0

$aluno= new Aluno ($nome, $peso, $altura);
$matricula= new Matricula ($aluno, $plano, $meses,$modalidades);

require_once "view_relatorio.php";
?>