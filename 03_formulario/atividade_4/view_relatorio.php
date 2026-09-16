
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 01</title>
</head>
<body>
    <h1>Resutado do Aluno</h1>

    <p><b>Nome:</b><?=$nome ?></p>
    <p><b>Nota 1:</b><?=$nota1 ?></p>
    <p><b>Nota 2:</b><?=$nota2 ?></p>
    <p><b>Nota 3:</b><?=$nota3 ?></p>
    <p><b>Média:</b><?=$media_final ?></p>
    

    <?php
        if($media_final >= 7):?>
            <h3>Aprovado</h3>
    <?php
        elseif($media_final < 7 ):?>
            <h3>Reprovado</h3>
    <?php endif ?>

    <?php
        if($media_final == 10 ):?>
            <h3>Você atingiu a nota maxima</h3>
    <?php endif ?>


    
</body>
</html>