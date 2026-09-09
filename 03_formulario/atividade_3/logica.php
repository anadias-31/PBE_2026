<?php
$numero1=$_POST['numero1'];
$numero2=$_POST['numero2'];
$resultado=0;
$operacao=$_POST['operacao'];

if($operacao == "soma"){
    $resultado=$numero1+$numero2;
    echo($resultado);
}
elseif($operacao == "subtracao"){
    $resultado=$numero1-$numero2;
    echo($resultado);
}
elseif($operacao == "multiplicacao"){
    $resultado=$numero1*$numero2;
    echo($resultado);
}
elseif($operacao == "divisao" ){
    if($numero1==0 || $numero2 ==0){
        echo"Erro divisão por !";
    }else
    $resultado=$numero1%$numero2;
    echo($resultado);
}else{
    echo"erro";
}
?>