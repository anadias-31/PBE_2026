<?php

session_start();


// Recupera os cadastros

$cadastros = $_SESSION["cadastros"] ?? [];

?>

<!DOCTYPE html>

<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>PetLove - Relatório</title>


    <style>

        body {

            margin: 0;

            font-family: Arial;

            background-color: #FFFDF9;

            color: #555;

        }


        header {

            background-color: #08A9C7;

            color: white;

            text-align: center;

            padding: 25px;

        }


        header h1 {

            margin: 0;

        }


        .container {

            width: 90%;

            max-width: 1000px;

            margin: 30px auto;

        }


        .cadastro {

            background-color: white;

            padding: 25px;

            margin-bottom: 20px;

            border-radius: 18px;

            border-left: 6px solid #FF7200;

            box-shadow: 0 4px 15px rgba(0,0,0,.08);

        }


        h2 {

            color: #008EAA;

        }


        .servico {

            display: inline-block;

            background-color: #E8F9FC;

            color: #008EAA;

            padding: 8px 12px;

            border-radius: 20px;

            margin: 4px;

            font-weight: bold;

        }


        .total {

            color: #FF7200;

            font-size: 24px;

            font-weight: bold;

        }


        .botao {

            display: inline-block;

            padding: 13px 20px;

            background-color: #FF7200;

            color: white;

            text-decoration: none;

            border-radius: 10px;

            font-weight: bold;

        }


        .vazio {

            background-color: white;

            padding: 40px;

            text-align: center;

            border-radius: 18px;

        }

    </style>

</head>


<body>


<header>

    <h1>🐾 PetLove</h1>

    <p>Relatório de Cadastros</p>

</header>


<div class="container">


<?php if (empty($cadastros)): ?>


    <div class="vazio">

        <h2>
            Nenhum cadastro realizado.
        </h2>

        <p>
            Cadastre um pet para visualizar o relatório.
        </p>

        <a
            href="view.php"
            class="botao"
        >
            Fazer cadastro
        </a>

    </div>


<?php else: ?>


    <?php foreach ($cadastros as $numero => $cadastro): ?>


        <div class="cadastro">


            <h2>

                🐶 Cadastro

                <?= $numero + 1 ?>

            </h2>


            <p>

                <strong>
                    Dono:
                </strong>

                <?= htmlspecialchars(
                    $cadastro["nome_dono"]
                ) ?>

            </p>


            <p>

                <strong>
                    Pet:
                </strong>

                <?= htmlspecialchars(
                    $cadastro["nome_animal"]
                ) ?>

            </p>


            <p>

                <strong>
                    Raça:
                </strong>

                <?= htmlspecialchars(
                    $cadastro["raca"]
                ) ?>

            </p>


            <p>

                <strong>
                    Porte:
                </strong>

                <?= htmlspecialchars(
                    ucfirst($cadastro["porte"])
                ) ?>

            </p>


            <p>

                <strong>
                    Data de nascimento:
                </strong>

                <?= htmlspecialchars(
                    $cadastro["data_nascimento"]
                ) ?>

            </p>


            <p>

                <strong>
                    Serviços:
                </strong>

            </p>


            <?php foreach (
                $cadastro["servicos"]
                as $servico
            ): ?>


                <span class="servico">

                    <?= htmlspecialchars(
                        $servico["nome"]
                    ) ?>

                    -

                    R$

                    <?= number_format(
                        $servico["valor"],
                        2,
                        ",",
                        "."
                    ) ?>

                </span>


            <?php endforeach; ?>


            <p class="total">

                Total:

                R$

                <?= number_format(
                    $cadastro["valor_total"],
                    2,
                    ",",
                    "."
                ) ?>

            </p>


        </div>


    <?php endforeach; ?>


    <a
        href="view.php"
        class="botao"
    >
        Novo cadastro
    </a>


<?php endif; ?>


</div>


</body>

</html>