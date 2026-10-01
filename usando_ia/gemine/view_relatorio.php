<?php
require_once 'logica.php';
$agendamentos = $_SESSION['agendamentos'] ?? [];
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetLove Petshop - Relatório de Atendimentos</title>
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
            max-width: 900px;
            margin: 0 auto;
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            padding: 30px;
            border-top: 8px solid var(--cor-laranja);
        }

        .header-relatorio {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            flex-wrap: wrap;
            gap: 15px;
        }

        h1 {
            color: var(--cor-azul);
            font-size: 28px;
        }

        h1 span {
            color: var(--cor-laranja);
        }

        .btn-voltar {
            display: inline-block;
            background-color: var(--cor-azul);
            color: white;
            text-decoration: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .btn-voltar:hover {
            background-color: #0088a3;
        }

        .card-relatorio {
            border: 1px solid #e0e0e0;
            border-left: 6px solid var(--cor-azul);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
            background-color: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .card-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #f0f0f0;
            padding-bottom: 12px;
            margin-bottom: 12px;
            flex-wrap: wrap;
            gap: 10px;
        }

        .pet-info {
            font-size: 20px;
            color: var(--cor-laranja);
            font-weight: bold;
        }

        .data-registro {
            color: #888;
            font-size: 14px;
        }

        .info-tutor {
            margin-bottom: 15px;
            line-height: 1.5;
        }

        .servicos-titulo {
            color: var(--cor-azul);
            font-weight: bold;
            margin-bottom: 8px;
        }

        .servico-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 15px;
        }

        .servico-list li {
            padding: 6px 12px;
            background-color: #f9f9f9;
            border-radius: 6px;
            margin-bottom: 6px;
            display: flex;
            justify-content: space-between;
        }

        .total-box {
            text-align: right;
            font-size: 20px;
            font-weight: bold;
            color: var(--cor-laranja);
            border-top: 2px dashed #eee;
            padding-top: 12px;
        }

        .empty-msg {
            text-align: center;
            padding: 50px 20px;
            color: #666;
        }

        .empty-msg p {
            margin-top: 10px;
            color: #999;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header-relatorio">
        <h1>Pet<span>Love</span> - Relatório de Atendimentos 🐾</h1>
        <a href="view.php" class="btn-voltar">+ Novo Cadastro</a>
    </div>

    <?php if (empty($agendamentos)): ?>
        <div class="empty-msg">
            <h2>Nenhum atendimento cadastrado até o momento.</h2>
            <p>Cadastre um novo pet na tela inicial para visualizar os valores e serviços aqui.</p>
        </div>
    <?php else: ?>
        <?php foreach (array_reverse($agendamentos) as $item): ?>
            <div class="card-relatorio">
                <div class="card-header">
                    <span class="pet-info">🐾 <?= $item['nome_pet'] ?> (<?= $item['especie'] ?> - Porte <?= $item['porte'] ?>)</span>
                    <span class="data-registro">🕒 Cadastrado em: <?= $item['data_registro'] ?></span>
                </div>
                
                <div class="info-tutor">
                    <strong>Tutor:</strong> <?= $item['nome_tutor'] ?> &nbsp;|&nbsp; 
                    <strong>Telefone:</strong> <?= $item['telefone'] ?>
                </div>

                <div class="servicos-titulo">Serviços Selecionados:</div>
                <ul class="servico-list">
                    <?php if (!empty($item['servicos'])): ?>
                        <?php foreach ($item['servicos'] as $s): ?>
                            <li>
                                <span>✔ <?= $s['nome'] ?></span>
                                <strong>R$ <?= number_format($s['valor'], 2, ',', '.') ?></strong>
                            </li>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <li><em>Nenhum serviço selecionado para este atendimento.</em></li>
                    <?php endif; ?>
                </ul>

                <div class="total-box">
                    Valor Total: R$ <?= number_format($item['valor_total'], 2, ',', '.') ?>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>

</body>
</html>