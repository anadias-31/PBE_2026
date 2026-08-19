<?php
function analisarNumero($numero){
    return [
        "numero"=>$numero,
        "dobro"=>$numero*2,
        "triplo"=>$numero*3,
        "quadrado"=>$numero*$numero,
        "situacao"=> $numero >=0 ? "Positivo": "Negativo"
    ];  
}
$resultado=analisarNumero(10);
echo "Numero:".$resultado["numero"]. "<br>";
echo "Dobro: ".$resultado["dobro"]. "<br>";
echo "Triplo: ".$resultado["triplo"]. "<br>";
echo "Quadrado: ".$resultado["quadrado"]. "<br>";
echo "Situação: ".$resultado ["situacao"];
?>