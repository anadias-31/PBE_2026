
<?php

$nome = $_POST['nome'];
$email = $_POST['email'] ;
$data = $_POST['data'] ;
$dias = (int) ($_POST['dias'] ?? 0);
$categoria = $_POST['categoria'];
$seguro = $_POST['seguro'];
$gps = $_POST['gps'] ;
$cadeirinha = $_POST['cadeirinha'] ;

function calcularSubtotal($diaria, $dias) {
    return $diaria * $dias;
}

function calcularPercentualDesconto($dias) {
    if ($dias >= 1 && $dias <= 6) {
        return 0;
    } elseif ($dias >= 7 && $dias <= 14) {
        return 10;
    } elseif ($dias >= 15) {
        return 20;
    }

    return 0;
}

function calcularAdicionais($seguro, $gps, $cadeirinha) {
    $adicionais = 0;

    if ($seguro == "sim") {
        $adicionais += 40;
    }

    if ($gps == "sim") {
        $adicionais += 15;
    }

    if ($cadeirinha == "sim") {
        $adicionais += 20;
    }

    return $adicionais;
}


if ($categoria == "economico") {
    $diaria = 100;
} elseif ($categoria == "intermediario") {
    $diaria = 150;
} elseif ($categoria == "luxo") {
    $diaria = 250;
} else {
    $diaria = 0;
}


$subtotal = calcularSubtotal($diaria, $dias);

$percentual = calcularPercentualDesconto($dias);

$adicionais = calcularAdicionais(
    $seguro,
    $gps,
    $cadeirinha
);

$total = $subtotal + $adicionais;

$desconto = $subtotal * ($percentual / 100);

$precoFinal = $total - $desconto;

require_once "view_relatorio.php";

?>
