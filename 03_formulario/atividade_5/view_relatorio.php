<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 05</title>
</head>
<body>
    <h1>Resutado do IMC</h1>

    <p><b>Nome:</b><?=$nome ?></p>
    <p><b>Peso:</b><?=$peso ?>kg</p>
    <p><b>Altura:</b><?=$altura ?>m</p>
     <p><b>Resultado IMC:</b><?=$imc ?></p>
    
    <?php
        if($imc < 18.5):?>
            <h3>Abaixo do peso</h3>
    <?php
        elseif($imc > 18.5 && $imc <= 24.9 ):?>
            <h3>Peso normal</h3>
    
    <?php
        elseif($imc > 25 && $imc <= 29.9):?>
            <h3>Sobrepeso</h3>

    <?php
        elseif($imc >= 30):?>
            <h3>Obesidade</h3>
    <?php endif ?>

</body>
</html>