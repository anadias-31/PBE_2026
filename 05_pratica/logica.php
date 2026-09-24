<?php

function calcularServicos($servicos, $porte) {


    $precos = [
        'banho' => [
            'grande' => 80,
            'medio' => 70,
            'pequeno' => 50
        ],

        'tosa' => [
            'grande' => 40,
            'medio' => 30,
            'pequeno' => 20
        ],

        'estetica' => [
            'grande' => 30,
            'medio' => 20,
            'pequeno' => 10
        ],

        'exames' => [
            'grande' => 150,
            'medio' => 140,
            'pequeno' => 140
        ]
    ];

    $total = 0;

    foreach($servicos as $servico){
        $total += $precos[$servico][$porte];
    }

    return $total;
}



$nome_dono = $_POST['nome_dono'];
$nome_animal = $_POST['nome_animal'];
$raca = $_POST['raca'];
$porte = $_POST['porte'];
$data_nascimento = $_POST['data_nascimento'];
$servicos = $_POST['servico'];

$total = calcularServicos($servicos , $porte);

require_once "view_relatorio.php"; 
?>

