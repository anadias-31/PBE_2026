<?php
$usuarios = [
    ["nome" => "Ana", "nota" => 8],
    ["nome" => "pedro", "nota" => 5],
    ["nome" => "Maria", "nota" => 7],
    ["nome" => "naty", "nota" => 4]
];

foreach ($usuarios as $usuario) {
    if ($usuario["nota"] != 5) {
        echo "O aluno " . $usuario["nome"] . " tirou nota: " . $usuario["nota"] . "<br>";
    }
}
?>
