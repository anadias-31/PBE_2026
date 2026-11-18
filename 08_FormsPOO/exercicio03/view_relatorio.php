<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holerite</title>
</head>
<body>
    <h1>Holerite</h1>

    <p>Nome: <?= $funcionario->getNome() ?></p>
    <p>Cargo: <?= $funcionario->getCargo() ?></p>
    <p>Salário Base: R$ <?= number_format($funcionario->getSalarioBase(), 2, ',', '.') ?></p>
   
    <table border="1">
        <tr>
            <th>Descrição</th>
            <th>Proventos</th>
            <th>Descontos</th>
        </tr>

        <tr>
            <td>Salario Base</td>
            <td><?=number_format($funcionario->DefinirSalarioBase(), 2, ',', '.')?></td>
            <td>-</td>
        </tr>

        <tr>
            <td>Horas Extras</td>
            <td><?=$funcionario->CalcularHorasExtras()?></td>
            <td>-</td>
        </tr>

        <tr>
            <td>INSS</td>
            <td>-</td>
            <td><?=number_format($funcionario->CalcularINSS(), 2, ',', '.')?></td>
        </tr>

        <tr>
            <td>Vale-transporte</td>
            <td>-</td>
            <td><?=$funcionario->CalcularValeTransporte()?></td>
        </tr>
    </table>

    <h2>Salário Bruto: <?= number_format($funcionario->CalcularSalarioBruto(), 2, ',', '.') ?> </h2>
    <h2>Salário Liquido: <?= number_format($funcionario->CalcularSalarioLiquido(), 2, ',', '.') ?></h2>

    <a href="view.php">Cadastrar outro</a>

</body>
</html>