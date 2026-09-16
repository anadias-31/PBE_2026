<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 05</title>
</head>
<body>
    <h1>Compra de ingressos</h1>

    <p><b>Nome:</b><?=$nome ?></p>
    <p><b>Nome do filme:</b><?=$filme ?></p>
    <p><b>Quantidade:</b><?=$qtd_ingresso ?></p>
    <p><b>Tipo selecionado:</b><?=$tipo ?></p>
    <p><b>Valor Total:</b>R$:<?=$valor_total?></p>
    

    <?php
        if($qtd_ingresso >10):?>
            <h3>Você recebeu 10% de desconto!!</h3>
    <?php endif ?>

</body>
</html>