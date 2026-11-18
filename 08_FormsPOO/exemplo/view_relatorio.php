<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Relatório</title>
</head>
<body>
    <h1>Produto Cadastrado </h1>
    <p>Nome: <?= $produto->getNome() ?></p>
    <p>Quantidade: <?= $produto->getQuantidade() ?> </p>
    <p>Preço: <?= $produto->getPreco() ?> </p>
    <h2><b>Total: <?= $produto->calcularTotal() ?> 🎉</b></h2>

    <button><a href="view.php">Cadastra novo produto</a></button>
</body>
</html>