<?php
$operacao = "*";
$n1=10;
$n2=20;
    switch ($operacao){
        case $operacao == "+":
            $soma=$n1+$n2;
            echo " A soma é =".$soma. "<br>";
            break;

        case $operacao =="-":
            $subtracao=$n1-$n2;
            echo " A subtração é =".$subtracao."<br>";
            break;

        case $operacao =="*":
            $multiplicacao=$n1*$n2;
            echo " A a multiplicação é =".$multiplicacao."<br>";
            break;

        case $operacao =="/":
            if($n2 == 0){
                echo "ERRO";
                break;
            }
            $divisao=$n1/$n2;
            echo " A divisao é =".$divisao."<br>";
            break;

        default:
            echo"erro";
    }
?>