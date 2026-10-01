<?php

session_start();


// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] != "POST") {

    header("Location: view.php");

    exit;

}


// RECEBENDO OS DADOS

$nome_dono = $_POST["nome_dono"];

$nome_animal = $_POST["nome_animal"];

$raca = $_POST["raca"];

$porte = $_POST["porte"];

$data_nascimento = $_POST["data_nascimento"];


// Recebe vários serviços

$servicos = $_POST["servicos"] ?? [];


// PREÇOS POR PORTE

$precos = [

    "pequeno" => [

        "banho" => 30,

        "tosa" => 35,

        "hidratacao" => 20,

        "unhas" => 15

    ],


    "medio" => [

        "banho" => 40,

        "tosa" => 45,

        "hidratacao" => 25,

        "unhas" => 18

    ],


    "grande" => [

        "banho" => 50,

        "tosa" => 60,

        "hidratacao" => 30,

        "unhas" => 20

    ]

];


// NOMES DOS SERVIÇOS

$nomes = [

    "banho" => "Banho",

    "tosa" => "Tosa",

    "hidratacao" => "Hidratação",

    "unhas" => "Corte de unhas"

];


// VALOR INICIAL

$valor_total = 0;

$servicos_escolhidos = [];


// CALCULA OS SERVIÇOS

foreach ($servicos as $servico) {


    if (isset($precos[$porte][$servico])) {


        $valor = $precos[$porte][$servico];


        // Soma o valor

        $valor_total += $valor;


        // Guarda o serviço

        $servicos_escolhidos[] = [

            "nome" => $nomes[$servico],

            "valor" => $valor

        ];

    }

}


// CADASTRO

$cadastro = [

    "nome_dono" => $nome_dono,

    "nome_animal" => $nome_animal,

    "raca" => $raca,

    "porte" => $porte,

    "data_nascimento" => $data_nascimento,

    "servicos" => $servicos_escolhidos,

    "valor_total" => $valor_total

];


// SALVA O CADASTRO

$_SESSION["cadastros"][] = $cadastro;

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>PetLove - Resultado</title>

    <style>

        body {

            font-family: Arial;

            background-color: #FFFDF9;

        }

        .resultado {

            width: 600px;

            max-width: 90%;

            margin: 50px auto;

            background: white;

            padding: 30px;

            border-radius: 20px;

            box-shadow: 0 5px 20px rgba(0,0,0,.1);

        }

        h1 {

            color: #08A9C7;

        }

        .total {

            color: #FF7200;

            font-size: 28px;

            font-weight: bold;

        }

        a {

            display: inline-block;

            padding: 12px 20px;

            margin-top: 15px;

            background-color: #08A9C7;

            color: white;

            text-decoration: none;

            border-radius: 10px;

        }

        .laranja {

            background-color: #FF7200;

        }

    </style>

</head>


<body>


<div class="resultado">

    <h1>🐾 Cadastro realizado!</h1>


    <p>

        <strong>Dono:</strong>

        <?= htmlspecialchars($nome_dono) ?>

    </p>


    <p>

        <strong>Pet:</strong>

        <?= htmlspecialchars($nome_animal) ?>

    </p>


    <p>

        <strong>Raça:</strong>

        <?= htmlspecialchars($raca) ?>

    </p>


    <p>

        <strong>Porte:</strong>

        <?= htmlspecialchars($porte) ?>

    </p>


    <h3>Serviços escolhidos:</h3>


    <ul>

        <?php foreach ($servicos_escolhidos as $servico): ?>

            <li>

                <?= $servico["nome"] ?>

                -

                R$

                <?= number_format(
                    $servico["valor"],
                    2,
                    ",",
                    "."
                ) ?>

            </li>

        <?php endforeach; ?>

    </ul>


    <p class="total">

        Total:

        R$

        <?= number_format(
            $valor_total,
            2,
            ",",
            "."
        ) ?>

    </p>


    <a href="view.php">
        Novo cadastro
    </a>


    <a
        href="view_relatorio.php"
        class="laranja"
    >
        Ver relatório
    </a>

</div>


</body>

</html>