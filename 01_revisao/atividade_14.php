<?php
$funcionarios = [
    ["nome" => "Carlos", "cargo" => "Programador", "salario" => 500],
    ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
    ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
    ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500],
    ["nome" => "João", "cargo" => "Suporte", "salario" => 1000],
    ["nome" => "Júlia", "cargo" => "Estagiária", "salario" => 2000],
];

$total = count($funcionarios);
$soma = 0;
foreach ($funcionarios as $usuario) {
    echo "Nome: " . $usuario["nome"] . "<br>";
    echo "Cargo: " . $usuario["cargo"] . "<br>";
    echo "Salário: R$ " . number_format($usuario["salario"], 2, ',', '.') . "<br><hr>";
    
    
    $soma += $usuario["salario"];
}

echo "Total de funcionários cadastrados: " . $total . "<br>";
echo "Soma total dos salários: R$ " . number_format($soma, 2, ',', '.');
?>
