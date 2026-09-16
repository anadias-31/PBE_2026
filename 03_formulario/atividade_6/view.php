<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 06</title>
</head>
<body>
    <h1>Compra de ingressos</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do Cliente:</label><br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Filme:</label><br>
        <input type="text" name="filme">
        <br><br>

        <label for="">Quantidade de ingressos:</label><br>
        <input type="number" name="qtd_ingresso">
        <br><br>

        <input type="radio" name="tipo" value="inteira">
        <label for="">Inteira</label><br>
        <input type="radio" name="tipo" value="meia">
        <label for="">Meia</label><br>


        <button style="background-color:#0079FE; color:#fff" type="submit">Comprar ingressos</button>
    </form>
    
</body>
</html>