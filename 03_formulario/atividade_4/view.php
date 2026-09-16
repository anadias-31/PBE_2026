<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 04</title>
</head>
<body>
    <h1>Calcular Média do Aluno</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do Aluno:</label><br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Nota 1:</label><br>
        <input type="number" name="nota1"  step="0.01">
        <br><br>

        <label for="">Nota 2:</label><br>
        <input type="number" name="nota2" step="0.01">
        <br><br>
        
        <label for="">Nota 3:</label><br>
        <input type="number" name="nota3" step="0.01">
        <br><br>
        

        <button style="background-color:#0079FE" type="submit">Calcular média</button>
    </form>
    
</body>
</html>