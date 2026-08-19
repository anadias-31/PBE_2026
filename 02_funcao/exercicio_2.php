<?php
function CalcularPrecoFinal($preco,$qtd_produto,$desconto){
    $total=($preco*$qtd_produto);
    $valorDesconto = $total*($desconto / 100);
    $valorFinal= $total-$valorDesconto;
        return "<b>O preço final é $valorFinal</b>";
} 

$preco_produto=100;
    echo "O produto custa R$$preco_produto";
    echo("<br>");

$quantidade=3;
    echo "Há $quantidade produtos";
    echo("<br>");

$percentual_desc=10;
    echo "Com $percentual_desc% de desconto";
    echo("<br>");

$resultado=CalcularPrecoFinal(100,3,10);
echo $resultado
?>