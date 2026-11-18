<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir dados</title>
</head>
<body>
    <h1>Relatório da session </h1>
    <!-- Dados simples nome e curso -->
    <!-- Tratamento de erro , caso não exitir nada na session -->
        <?php if(isset($_SESSION['nome'])):?>
            <p>Nome:<?=$_SESSION['nome']?></p>
            <p>Curso:<?=$_SESSION['curso']?></p>
        <?php else: ?>
            <p>Nenhum nome encontrado</p>
        <?php endif; ?>
    <!-- Lista dos alunos da turma  -->
        <h2>Turma</h2>
        <?php if(isset($_SESSION['turma'])): ?>
    <p>Quantidade de alunos da turma: <?=count($_SESSION['turma'])?></p>
    <table border="1">
        <tr>
            <th>Posição</th>
            <th>Nome</th>
            <th>Curso</th>
        </tr>

        <?php foreach($_SESSION['turma'] as $id => $aluno): ?>
            <tr>
                <td><?=$id?></td>
                <td><?=$aluno['nome']?></td>
                <td><?=$aluno['curso']?></td>
            </tr>
        <?php endforeach; ?> 
    </table>
<?php else: ?>
    <p>Nenhum aluno encontrado</p>
<?php endif; ?>