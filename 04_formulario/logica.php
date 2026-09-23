<?php 
// Recebendo os dados do formulário
$nome = $_POST['nome']; 

$nome_produto = $_POST['nome_produto']; 
$preco = $_POST['preco']; 
$quantidade = $_POST['quantidade']; 

$nome_produto2 = $_POST['nome_produto2']; 
$preco2 = $_POST['preco2']; 
$quantidade2 = $_POST['quantidade2']; 

$nome_produto3 = $_POST['nome_produto3']; 
$preco3 = $_POST['preco3']; 
$quantidade3 = $_POST['quantidade3']; 


$produtos = [ 
    ['nome_produto' => $nome_produto, 'preco' => $preco, 'quantidade' => $quantidade, 'subtotal' => $preco * $quantidade], 
    ['nome_produto' => $nome_produto2, 'preco' => $preco2, 'quantidade' => $quantidade2, 'subtotal' => $preco2 * $quantidade2], 
    ['nome_produto' => $nome_produto3, 'preco' => $preco3, 'quantidade' => $quantidade3, 'subtotal' => $preco3 * $quantidade3], 
]; 


$total_final = 0; 

foreach ($produtos as $produto) { 
    $total_final += $produto['subtotal']; 
} 


$desconto = 0; 
if ($total_final > 500) { 
    $desconto = 10; 
} 

$valor_desconto = $total_final * ($desconto / 100); 
$valor_total = $total_final - $valor_desconto; 


require_once "view_relatorio.php"; 
?>

