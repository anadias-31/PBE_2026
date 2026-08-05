<?php
$a = 10;
$b = 5;
$c = 6;
$delta = ($b ** 2) - (4 * $a * $c);
   
$x1 = (- $b +sqrt($delta)) / 2* $a;
    echo "X1= " . $x1;

$x2 = (- $b - sqrt($delta)) / 2* $a;
    echo " <br> X2= " . $x2;
   
?>