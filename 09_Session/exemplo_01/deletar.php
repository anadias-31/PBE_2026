<?php
session_start();
//Remover da lista
//Remover apenas um item
//unset($_SESSION['nome']);//Remover apenas uma posição
//unset($_SESSION['turma'][1]);//Remover apenas um item da lista

session_destroy();

echo "<h4>Após remover</h4>";
echo "<pre>";
print_r($_SESSION);
echo "</pre>";

