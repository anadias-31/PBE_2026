<?php
$idade=16;
$acompanhado=true;

    if ($idade >= 18){
        echo "Entrada liberada!🤩";
}
    else if ($idade >=14 && $idade <= 17 && $acompanhado == True){
        echo "Entrada liberada somente acompanhado";
}
    else{
        echo "Entrada não liberada";
}
   
?>