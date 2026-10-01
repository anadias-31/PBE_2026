<?php
// Este arquivo é responsável pela parte visual do sistema.
// Aqui ficam o HTML, os campos do formulário e o CSS.
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>PetLove Pet Shop</title>

    <style>

        /* Define o estilo geral da página */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #FFFDF9;
            color: #555;
        }

        /* Cabeçalho azul */
        header {
            background-color: #08A9C7;
            color: white;
            text-align: center;
            padding: 25px;
        }

        header h1 {
            margin: 0;
            font-size: 38px;
        }

        /* Espaço principal da página */
        .container {
            width: 90%;
            max-width: 1100px;
            margin: 30px auto;
        }

        /* Caixa branca para separar as partes */
        .card {
            background-color: white;
            padding: 25px;
            margin-bottom: 25px;
            border-radius: 18px;

            /* Cria uma sombra */
            box-shadow: 0 4px 15px rgba(0,0,0,0.10);
        }

        /* Títulos */
        h2 {
            color: #008EAA;
        }

        /* Organiza os campos em duas colunas */
        .formulario {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        /* Organiza cada campo */
        .campo {
            display: flex;
            flex-direction: column;
        }

        /* Texto dos campos */
        label {
            font-weight: bold;
            margin-bottom: 6px;
        }

        /* Campos para digitar e selecionar */
        input,
        select {
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 10px;
            font-size: 15px;
        }

        /* Organiza os serviços */
        .servicos {
            display: grid;

            /* Cria 4 colunas */
            grid-template-columns: repeat(4, 1fr);

            gap: 15px;
        }

        /* Card de cada serviço */
        .servico {
            border: 2px solid #eee;
            border-radius: 15px;
            overflow: hidden;
            background-color: white;
        }

        /* Efeito quando passar o mouse */
        .servico:hover {
            border-color: #08A9C7;
        }

        /* Imagem do serviço */
        .servico img {
            width: 100%;
            height: 150px;

            /* Faz a imagem preencher o espaço */
            object-fit: cover;
        }

        /* Espaço dentro do card */
        .servico-conteudo {
            padding: 12px;
        }

        /* Nome do serviço */
        .servico h3 {
            color: #008EAA;
            margin-top: 0;
        }

        /* Texto "Selecionar" */
        .selecionar {
            color: #FF7200;
            font-weight: bold;
        }

        /* Cor do checkbox */
        .selecionar input {
            accent-color: #FF7200;
        }

        /* Botão */
        button {
            background-color: #FF7200;
            color: white;

            border: none;

            padding: 15px 25px;

            border-radius: 12px;

            font-size: 16px;

            font-weight: bold;

            cursor: pointer;
        }

        /* Cor do botão ao passar o mouse */
        button:hover {
            background-color: #E85F00;
        }

        /* Link do relatório */
        .relatorio {
            margin-left: 15px;
            color: #008EAA;
            text-decoration: none;
            font-weight: bold;
        }

        /* Deixa o site adaptado para telas menores */
        @media(max-width: 800px) {

            .servicos {
                grid-template-columns: 1fr 1fr;
            }

        }

        @media(max-width: 600px) {

            .formulario,
            .servicos {
                grid-template-columns: 1fr;
            }

        }

    </style>

</head>

<body>


<!-- Cabeçalho do site -->

<header>

    <h1>🐾 PetLove</h1>

    <p>
        Tudo para o bem-estar do seu pet!
    </p>

</header>


<div class="container">


    <!--
        Formulário de cadastro.

        Quando o usuário clicar no botão,
        os dados serão enviados para logica.php.
    -->

    <form action="logica.php" method="POST">


        <!-- ÁREA DE CADASTRO -->

        <div class="card">

            <h2>🐶 Cadastro do Pet</h2>


            <div class="formulario">


                <!-- Nome do dono -->

                <div class="campo">

                    <label>
                        Nome do dono:
                    </label>

                    <input
                        type="text"
                        name="nome_dono"
                        required
                    >

                </div>


                <!-- Nome do animal -->

                <div class="campo">

                    <label>
                        Nome do animal:
                    </label>

                    <input
                        type="text"
                        name="nome_animal"
                        required
                    >

                </div>


                <!-- Raça -->

                <div class="campo">

                    <label>
                        Raça:
                    </label>

                    <input
                        type="text"
                        name="raca"
                        required
                    >

                </div>


                <!-- Porte -->

                <div class="campo">

                    <label>
                        Porte:
                    </label>

                    <select
                        name="porte"
                        required
                    >

                        <option value="">
                            Selecione
                        </option>

                        <option value="pequeno">
                            Pequeno
                        </option>

                        <option value="medio">
                            Médio
                        </option>

                        <option value="grande">
                            Grande
                        </option>

                    </select>

                </div>


                <!-- Data de nascimento -->

                <div class="campo">

                    <label>
                        Data de nascimento:
                    </label>

                    <input
                        type="date"
                        name="data_nascimento"
                        required
                    >

                </div>


            </div>

        </div>


        <!-- ÁREA DE SERVIÇOS -->

        <div class="card">

            <h2>🛁 Escolha os serviços</h2>

            <p>
                Você pode escolher mais de um serviço.
            </p>


            <div class="servicos">


                <!-- SERVIÇO: BANHO -->

                <div class="servico">

                    <img
                        src="https://images.unsplash.com/photo-1548199973-03cce0bbc87b?auto=format&fit=crop&w=600&q=80"
                        alt="Banho para cachorro"
                    >

                    <div class="servico-conteudo">

                        <h3>Banho</h3>

                        <p>
                            Higiene completa do pet.
                        </p>


                        <!--
                            [] significa que podemos
                            selecionar vários serviços.
                        -->

                        <label class="selecionar">

                            <input
                                type="checkbox"
                                name="servicos[]"
                                value="banho"
                            >

                            Selecionar

                        </label>

                    </div>

                </div>


                <!-- SERVIÇO: TOSA -->

                <div class="servico">

                    <img
                        src="https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?auto=format&fit=crop&w=600&q=80"
                        alt="Tosa de cachorro"
                    >

                    <div class="servico-conteudo">

                        <h3>Tosa</h3>

                        <p>
                            Corte e cuidado da pelagem.
                        </p>

                        <label class="selecionar">

                            <input
                                type="checkbox"
                                name="servicos[]"
                                value="tosa"
                            >

                            Selecionar

                        </label>

                    </div>

                </div>


                <!-- SERVIÇO: HIDRATAÇÃO -->

                <div class="servico">

                    <img
                        src="https://images.unsplash.com/photo-1581888227599-779811939961?auto=format&fit=crop&w=600&q=80"
                        alt="Hidratação de pet"
                    >

                    <div class="servico-conteudo">

                        <h3>Hidratação</h3>

                        <p>
                            Cuidado especial para a pelagem.
                        </p>

                        <label class="selecionar">

                            <input
                                type="checkbox"
                                name="servicos[]"
                                value="hidratacao"
                            >

                            Selecionar

                        </label>

                    </div>

                </div>


                <!-- SERVIÇO: UNHAS -->

                <div class="servico">

                    <img
                        src="https://images.unsplash.com/photo-1558788353-f76d92427f16?auto=format&fit=crop&w=600&q=80"
                        alt="Cuidados com cachorro"
                    >

                    <div class="servico-conteudo">

                        <h3>Corte de unhas</h3>

                        <p>
                            Cuidados com as unhas.
                        </p>

                        <label class="selecionar">

                            <input
                                type="checkbox"
                                name="servicos[]"
                                value="unhas"
                            >

                            Selecionar

                        </label>

                    </div>

                </div>


            </div>

        </div>


        <!-- BOTÕES -->

        <div class="card">

            <!-- Envia o formulário -->

            <button type="submit">

                Cadastrar e calcular valor

            </button>


            <!-- Abre o relatório -->

            <a
                class="relatorio"
                href="view_relatorio.php"
            >

                Ver relatório

            </a>

        </div>


    </form>

</div>

</body>

</html>