<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório de alunos</title>
</head>
<body>
    <h1>Relatório de alunos </h1>
    <?php if(isset($_SESSION['nome'])):?>
        <p>Nome: <?= $_SESSION['nome']?> </p>
        <p>Curso: <?= $_SESSION['curso']?> </p>
    <?php else: ?>
        <p>Nenhum  nome encontrado</p>
    <?php endif; ?>

    <h2>Turma</h2>
    <?php if(isset($_SESSION['turma'])):?>
        <p>Total de alunos: <?=count($_SESSION['turma'])?></p>
    <?php else: ?>
        <p>Nenhum  aluno na turma</p>
    <?php endif; ?>

    <table border="1">
        <thead>
            <tr>
                <th>Posição</th>
                <th>Nome</th>
                <th>Curso</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
                <?php foreach($_SESSION['turma'] as $id => $aluno): ?>
                    <tr>
                        <td><?= $id?></td>
                        <td><?= $aluno['nome']?></td>
                        <td><?= $aluno['curso']?></td>
                        <td>Depois</td>
                    </tr>
                <?php endforeach ?>
        </tbody>
    </table>
    <br>
    <a href="view.php">Realizar novo cadastro</a>

</body>
</html>