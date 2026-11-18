<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicío 01</title>
    </head>
    <body>
        <form action="logica.php" method="POST">
            <label for="">Nome:</label><br>
            <input type="text" name="nome">
            <br><br>

            <label for="">Quantidade:</label><br>
            <input type="number" name="quantidade">
            <br><br>

            <label for="">Preço:</label><br>
            <input type="number" name="preco" step="0.01">
            <br><br>

            <button type="submit">Cadastrar</button>
        </form>
    </body>
</html>