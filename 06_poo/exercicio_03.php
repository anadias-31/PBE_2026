<?php
class Banco{
    public $disciplina;
    public $professor;
    public $duracao;
    public $numero_sala;
    public $bloco;

    function exibirInformacoes($dados){
        
    }

}
$conta1=new Banco();
    $conta1->titular="Ana Lara";
    $conta1->numero="123";
    $conta1->saldo=1000;
    $conta1->tipo="Conta corrente";

echo"Titular: ".$conta1->titular."<br>";
echo"Numero: ".$conta1->numero."<br>";
echo"Saldo: ".$conta1->saldo."<br>";
echo"Tipo: ".$conta1->tipo."<br>";
echo"<hr>";

$conta2=new Banco();
    $conta2->titular="Maria Cecilia";
    $conta2->numero="124";
    $conta2->saldo=8000;
    $conta2->tipo="Conta conjunta";

echo"Titular: ".$conta2->titular."<br>";
echo"Numero: ".$conta2->numero."<br>";
echo"Saldo: ".$conta2->saldo."<br>";
echo"Tipo: ".$conta2->tipo."<br>";
echo"<hr>";

$conta1->depositar(100);
$conta2->sacar(1000);
echo"<hr>";
$conta1->consultarSaldo();
$conta2->consultarSaldo();

?>