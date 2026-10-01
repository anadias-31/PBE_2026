<?php
require_once 'logica.php';
$servicos = getTabelaServicos();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLove Petshop - Cadastramento</title>
    <style>
        :root {
            --cor-azul: #00A8CC;
            --cor-laranja: #FF7A00;
            --cor-fundo: #F4FBFC;
            --cor-texto: #333333;
        }

        * {
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: var(--cor-fundo);
            color: var(--cor-texto);
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 30px;
            border-top: 8px solid var(--cor-azul);
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .header h1 {
            color: var(--cor-azul);
            font-size: 32px;
        }

        .header h1 span {
            color: var(--cor-laranja);
        }

        .header p {
            color: var(--cor-laranja);
            font-weight: bold;
            margin-top: 5px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 8px;
            color: var(--cor-azul);
        }

        input[type="text"], select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 16px;
            outline: none;
        }

        input[type="text"]:focus, select:focus {
            border-color: var(--cor-azul);
        }

        .grid-servicos {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(160px, 1fr));
            gap: 15px;
            margin-top: 10px;
        }

        .card-servico {
            border: 2px solid #eee;
            border-radius: 10px;
            overflow: hidden;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
            background: #fff;
            display: flex;
            flex-direction: column;
        }

        .card-servico img {
            width: 100%;
            height: 110px;
            object-fit: cover;
        }

        .card-servico-content {
            padding: 10px;
            flex-grow: 1;
        }

        .card-servico input[type="checkbox"] {
            margin-right: 5px;
            transform: scale(1.2);
            accent-color: var(--cor-laranja);
        }

        .card-servico:hover {
            border-color: var(--cor-laranja);
            transform: translateY(-3px);
        }

        .btn-submit {
            width: 100%;
            background-color: var(--cor-laranja);
            color: white;
            border: none;
            padding: 15px;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            margin-top: 10px;
        }

        .btn-submit:hover {
            background-color: #e06b00;
        }

        .btn-relatorio {
            display: block;
            text-align: center;
            margin-top: 15px;
            color: var(--cor-azul);
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <h1>Pet<span>Love</span></h1>
        <p>Tudo para o bem-estar do seu pet 🐾</p>
    </div>

    <form action="logica.php" method="POST">
        <input type="hidden" name="acao" value="cadastrar">

        <div class="form-group">
            <label for="nome_tutor">Nome do Tutor:</label>
            <input type="text" id="nome_tutor" name="nome_tutor" required placeholder="Digite o nome do tutor">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone / WhatsApp:</label>
            <input type="text" id="telefone" name="telefone" required placeholder="(00) 00000-0000">
        </div>

        <div style="display: flex; gap: 15px;">
            <div class="form-group" style="flex: 1;">
                <label for="nome_pet">Nome do Pet:</label>
                <input type="text" id="nome_pet" name="nome_pet" required placeholder="Ex: Bob, Mel">
            </div>

            <div class="form-group" style="flex: 1;">
                <label for="especie">Espécie:</label>
                <select id="especie" name="especie">
                    <option value="Cão">Cão</option>
                    <option value="Gato">Gato</option>
                </select>
            </div>
        </div>

        <div class="form-group">
            <label for="porte">Porte do Pet (Aplica ajuste no preço total):</label>
            <select id="porte" name="porte" required>
                <option value="pequeno">Pequeno (Preço Base)</option>
                <option value="medio">Médio (+25% no valor dos serviços)</option>
                <option value="grande">Grande (+50% no valor dos serviços)</option>
            </select>
        </div>

        <div class="form-group">
            <label>Selecione os Serviços (Você pode marcar vários):</label>
            <div class="grid-servicos">
                <?php foreach ($servicos as $chave => $servico): ?>
                    <label class="card-servico">
                        <img src="<?= $servico['imagem'] ?>" alt="<?= $servico['nome'] ?>">
                        <div class="card-servico-content">
                            <input type="checkbox" name="servicos[]" value="<?= $chave ?>">
                            <strong><?= $servico['nome'] ?></strong>
                            <div style="color: var(--cor-azul); font-size: 14px; margin-top: 4px;">
                                a partir de R$ <?= number_format($servico['preco_base'], 2, ',', '.') ?>
                            </div>
                        </div>
                    </label>
                <?php endforeach; ?>
            </div>
        </div>

        <button type="submit" class="btn-submit">Cadastrar Atendimento 🐾</button>
    </form>

    <a href="view_relatorio.php" class="btn-relatorio">Ver Relatório de Cadastros →</a>
</div>

</body>
</html>