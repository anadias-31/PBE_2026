<?php
//Frequencia 1
echo "<br>";
$frequencia=98;
$nota=9;
$nome="Ana Lara";

if($frequencia < 75 ){
    echo"$nome-Reprovado por falta";
}

else if($nota >= 7 ){
    echo"$nome-Aprovado";
}

else if($nota >=5 && $nota <= 6.9){
    echo"$nome-Recuperação";

}else{
    echo"$nome-Reprovado";
}

//Frequencia 2
echo "<br>";
$frequencia=75;
$nota=7;
$nome="Pedro";

if($frequencia < 75 ){
    echo"$nome-Reprovado por falta";
}

else if($nota >= 7 ){
    echo"$nome-Aprovado";
}

else if($nota >=5 && $nota <= 6.9){
    echo"$nome-Recuperação";

}else{
    echo"$nome-Reprovado";
}

//Frequencia 3
echo "<br>";
$frequencia=45;
$nota=3;
$nome="Maria";

if($frequencia < 75 ){
    echo"$nome-Reprovado por falta";
}

else if($nota >= 7 ){
    echo"$nome-Aprovado";
}

else if($nota >=5 && $nota <= 6.9){
    echo"$nome-Recuperação";

}else{
    echo"$nome-Reprovado";
}
?>