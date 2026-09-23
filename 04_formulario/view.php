<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 02</title>
</head>

<body>
    <h1>Carrinho de compras</h1>
    <h2>Dados do Cliente</h2>
    <form action="logica.php" method="post">
        <label for="">Nome:</label><br>
        <input type="text" name="nome">
        <br><br>

        <h2>Produto 1</h2>

        <label for="">Nome do Produto::</label><br>
        <input type="text" name="nome_produto">
        <br><br>

        <label for="">Preço:</label><br>
        <input type="number" name="preco">
        <br><br>

        <label for="">Quantidade:</label><br>
        <input type="number" name="quantidade">
        <br><br>

        <h2>Produto 2</h2>

        <label for="">Nome do Produto::</label><br>
        <input type="text" name="nome_produto2">
        <br><br>

        <label for="">Preço:</label><br>
        <input type="number" name="preco2">
        <br><br>

        <label for="">Quantidade:</label><br>
        <input type="number" name="quantidade2">
        <br><br>

        <h2>Produto 3</h2>

        <label for="">Nome do Produto::</label><br>
        <input type="text" name="nome_produto3">
        <br><br>

        <label for="">Preço:</label><br>
        <input type="number" name="preco3">
        <br><br>

        <label for="">Quantidade:</label><br>
        <input type="number" name="quantidade3">
        <br><br>

        <button style="background-color:#2A8EFF"type="submit">Finalizar compra</button>
    </form>  
</body>
</html>