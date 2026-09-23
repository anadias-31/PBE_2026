<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 02</title>
</head>
<body>
    <h1>Resumo da compra</h1>
    <p><b>Cliente:</b> <?= $nome ?></p>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Quantidade</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($produtos as $produto): ?>
            <tr>
                <td><?= $produto['nome_produto'] ?></td>
                <td>R$ <?= $produto['preco'] ?></td>
                <td><?= $produto['quantidade'] ?></td>
                <td>R$ <?= $produto['subtotal'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <p><b>Total da compra:</b> R$ <?= $total_final ?></p>
    
    <?php if($desconto > 0): ?>
        <p><b>Desconto:</b> <?= $desconto ?>%</p>
        <p>Você recebeu <?= $desconto ?>% de desconto!!</p>
    <?php endif; ?>
    <p>Obrigado pela sua compra!</p>
    <h2>Total Final: R$ <?= $total_final ?></h2>
    
</body>
</html>
