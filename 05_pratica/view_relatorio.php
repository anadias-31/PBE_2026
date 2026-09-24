<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PetLove</title>
    <link rel="stylesheet" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_FTCsO3Rt-7gENdWUG9cWJE7rUSIBvdvGR_Ydyiqnrg&s=10">
</head>

<body style="background-color:#E9DDCB;">
    <h1 style= "text-align:center; background-color:#01A6C6; color:#fffff" >Relatório do seu Pet 🐾 </h1>

    <h2 style="color:#FE7723">Olá <?= $nome_dono ?> Seja bem vindo a <b>PetLove</b></h2>
    <p>Nome do Animal:<b> <?= $nome_animal ?></b> </p>
    <p>Raça:<b><?= $raca ?></b></p>
    <p>Porte:<b><?= $porte ?></b></p>
    <p>Data de nascimento: <b><?=$data_nascimento ?></b> <p>
    <h2 style="color:#01A6C6">Valor Total: R$ <b><?= $total ?></b></h2>
</body>
</html>