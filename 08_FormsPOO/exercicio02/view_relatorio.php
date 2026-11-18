<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Boletim Escolar</title>
</head>
<body>

    <h1>Boletim Escolar</h1>
    <p>Nome: <?= $aluno->getNome() ?></p>
    <p>Turma: <?= $aluno->getTurma() ?></p>

    <table border="1">
        <tr>
            <th>Nota 1</th>
            <th>Nota 2</th>
            <th>Nota 3</th>
            <th>Faltas:</th>
            <th>Média</th>
        </tr>
        <tr>
            <td><?= $aluno->getNota1() ?></td>
            <td><?= $aluno->getNota2() ?></td>
            <td><?= $aluno->getNota3() ?></td>
            <td><?= $aluno->getFaltas() ?></td>
            <td><?= $aluno->calcularMedia() ?></td>
        </tr>
    </table>

    <p>Faltas: <?= $aluno->getFaltas() ?></p>
    <p>Frequência: <?= number_format($aluno->calcularFrequencia(), 1, ',', '.') ?>%</p>
    <h2><?= $aluno->verificarSituacao() ?></h2>
    <br>

    <button><a href="view.php">Cadastrar outro aluno</a></button>

</body>
</html>


