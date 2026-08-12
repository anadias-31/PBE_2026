<?php
$idades=[12,14,16,18,20,22,24,26];
$conta_maior=0;

$total = 0;
$soma=0;
 
foreach ($idades as $idade){
    $soma+=$idade;
    $total += 1;

    if ($idade >= 18){
        $conta_maior+=1;
    }
}

$media=$soma/$total;

echo "A média é $media <br> Tem $conta_maior idades maior que 18 anos"
?>