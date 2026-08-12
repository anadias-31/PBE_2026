<?php
$numeros = [10,9,8,7,6,5,4,3,2,1];
$maior = $numeros[0];

foreach($numeros as $numero){
    if ($numero > $maior){
        $maior=$numero;
    }
}
echo "O maior numero é: $maior";

?>