<?php
$produtos=[
    ["nome"=>"Mouse", "valor"=>50],
    ["nome"=>"Pendrive", "valor"=>35],
    ["nome"=>"Headsed", "valor"=>101]
    ];
    foreach($produtos as $produto){
        if ($produto["valor"] <= 100){
            echo "Produto: " . $produto["nome"] . ",valor: " . $produto["valor"] . "<br>";
        }
    }

?>