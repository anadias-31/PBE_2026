<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 05</title>
</head>
<body>
    <h1>CAlcular IMC</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label><br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Peso em kg:</label><br>
        <input type="number" name="peso"  step="0.1">
        <br><br>

        <label for="">Altura em metros:</label><br>
        <input type="number" name="altura" step="0.01">
        <br><br>

        <button style="background-color:#0079FE; color:#fff" type="submit">Calcular </button>
    </form>
    
</body>
</html>