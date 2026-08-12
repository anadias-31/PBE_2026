<?php
$estoque = [
    ["nome" => "Teclado", "quantidade" => 15],
    ["nome" => "Mouse", "quantidade" => 0],
    ["nome" => "Monitor", "quantidade" => 8],
    ["nome" => "Gabinete", "quantidade" => 0],
    ["nome" => "Headset", "quantidade" => 5]
];


foreach ($estoque as $produto) {
    echo "Produto: " . $produto["nome"] . "<br>";
    
    
    if ($produto["quantidade"] == 0) {
        echo "Quantidade: Sem estoque<br>";
    } else {
        echo "Quantidade: " . $produto["quantidade"] . "<br>";
    }
    
    echo "<hr>";
}
?>