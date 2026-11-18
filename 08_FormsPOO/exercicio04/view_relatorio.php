<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatorio</title>
</head>
<body>

    <h1>Contrato de Matrícula</h1>
    <h2>Aluno</h2>
    <p>Nome: <?= $matricula->getAluno()->getNome() ?></p>
    <p>IMC: <?= number_format($matricula->getAluno()->calcularIMC(), 1, ',', '.') ?></p>
    <p>Classificação: <?= $matricula->getAluno()->classificarIMC() ?></p>

    <h2>Mensalidade</h2>
    <table border="1">
    <tr>
        <th>Descrição</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Plano <?= $matricula->getPlano() ?></td>
        <td>R$ <?= number_format($matricula->calcularValorPlano(), 2, ',', '.') ?></td>
    </tr>

    <?php foreach ($matricula->getModalidades() as $modalidade): ?>
    <tr>
        <td><?= $modalidade ?></td>
        <td>R$ <?= number_format($matricula->calcularValorModalidade($modalidade), 2, ',', '.') ?></td>
    </tr>
    <?php endforeach; ?>

    <tr>
        <td>Mensalidade</td>
        <td>R$ <?= number_format($matricula->calcularMensalidade(), 2, ',', '.') ?></td>
    </tr>

</table>

    <p>Quantidade de meses: <?= $matricula->getMeses() ?></p>
    <p>Subtotal: R$ <?= number_format($matricula->calcularSubtotal(), 2, ',', '.') ?></p>
    <p>Desconto: <?= $matricula->calcularPercentualDesconto() ?>%</p>
    <p>Valor do desconto: R$ <?= number_format($matricula->calcularDesconto(), 2, ',', '.') ?></p>
    <p>Total do contrato: R$ <?= number_format($matricula->calcularTotal(), 2, ',', '.') ?></p>

    <?php

        if ($matricula->calcularPercentualDesconto() > 0) {
            echo "<p>Parabéns! Você ganhou " . $matricula->calcularPercentualDesconto() . "% de desconto.</p>";
        } elseif ($matricula->calcularPercentualDesconto() == 0) {
            echo "<p>Dica: fechando 6 meses ou mais você ganha desconto.</p>";
        }

    ?>
    
</body>
</html>