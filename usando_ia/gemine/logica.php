<?php
session_start();

// Tabela de preços e dados dos serviços
function getTabelaServicos() {
    return [
        'banho' => [
            'nome' => 'Banho Completo',
            'preco_base' => 40.00,
            'imagem' => 'https://images.unsplash.com/photo-1516734212186-a967f81ad0d7?w=300&auto=format&fit=crop&q=80'
        ],
        'tosa' => [
            'nome' => 'Tosa Higiênica/Geral',
            'preco_base' => 50.00,
            'imagem' => 'https://images.unsplash.com/photo-1591946614720-90a587da4a36?w=300&auto=format&fit=crop&q=80'
        ],
        'unhas' => [
            'nome' => 'Corte de Unhas',
            'preco_base' => 20.00,
            'imagem' => 'https://images.unsplash.com/photo-1548767797-d8c844163c4c?w=300&auto=format&fit=crop&q=80'
        ],
        'dentes' => [
            'nome' => 'Escovação Dentária',
            'preco_base' => 25.00,
            'imagem' => 'https://images.unsplash.com/photo-1583511655857-d19b40a7a54e?w=300&auto=format&fit=crop&q=80'
        ]
    ];
}

// FUNÇÃO 1: Calcula o valor total considerando os serviços múltiplos e o porte do pet
function calcularTotalServicos($servicosSelecionados, $portePet) {
    $servicosDisponiveis = getTabelaServicos();
    $totalBase = 0;
    $detalhesServicos = [];

    // Fator multiplicador para o porte do animal
    $multiplicadores = [
        'pequeno' => 1.0,  // Preço normal
        'medio'   => 1.25, // 25% adicional
        'grande'  => 1.50  // 50% adicional
    ];

    $fator = $multiplicadores[$portePet] ?? 1.0;

    if (!empty($servicosSelecionados) && is_array($servicosSelecionados)) {
        foreach ($servicosSelecionados as $chaveServico) {
            if (isset($servicosDisponiveis[$chaveServico])) {
                $precoFinal = $servicosDisponiveis[$chaveServico]['preco_base'] * $fator;
                $totalBase += $precoFinal;
                
                $detalhesServicos[] = [
                    'nome' => $servicosDisponiveis[$chaveServico]['nome'],
                    'valor' => $precoFinal
                ];
            }
        }
    }

    return [
        'valor_total' => $totalBase,
        'itens' => $detalhesServicos
    ];
}

// FUNÇÃO 2: Processa e cadastra o atendimento na sessão PHP
function cadastrarAtendimento($dados) {
    if (!isset($_SESSION['agendamentos'])) {
        $_SESSION['agendamentos'] = [];
    }

    $porte = $dados['porte'] ?? 'pequeno';
    $servicos = $dados['servicos'] ?? [];
    
    // Executa a função de cálculo
    $calculo = calcularTotalServicos($servicos, $porte);

    $novoCadastro = [
        'id' => uniqid(),
        'nome_tutor' => htmlspecialchars($dados['nome_tutor'] ?? ''),
        'telefone' => htmlspecialchars($dados['telefone'] ?? ''),
        'nome_pet' => htmlspecialchars($dados['nome_pet'] ?? ''),
        'especie' => htmlspecialchars($dados['especie'] ?? 'Cão'),
        'porte' => ucfirst($porte),
        'servicos' => $calculo['itens'],
        'valor_total' => $calculo['valor_total'],
        'data_registro' => date('d/m/Y H:i')
    ];

    $_SESSION['agendamentos'][] = $novoCadastro;
}

// Captura a ação enviada pelo formulário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['acao']) && $_POST['acao'] === 'cadastrar') {
    cadastrarAtendimento($_POST);
    header('Location: view_relatorio.php');
    exit;
}
?>