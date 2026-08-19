<?php
function verificarMaioridade($idade){
    if ($idade >= 18){
        return "Maior de idade";
    }else{
        return "Menor de idade";
    }
}
$resultado= verificarMaioridade (16);
echo "Ana Lara- ";
echo $resultado;
echo "<br>";

$resultado= verificarMaioridade (18);
echo "Pedro- ";
echo $resultado;
echo "<br>";

$resultado= verificarMaioridade (10);
echo "Maria- ";
echo $resultado;
echo "<br>";

?>