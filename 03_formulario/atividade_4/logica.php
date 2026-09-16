<?php
$nome=$_POST['nome'];
$nota1=$_POST['nota1'];
$nota2=$_POST['nota2'];
$nota3=$_POST['nota3'];
$media_final=0;

$media_final=($nota1+$nota2+$nota3)/3;

if($media_final > 10){
    $media_final=10;
}

require_once "view_relatorio.php";
?>