<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 3</title>
</head>
<body>
    <h1>Calculadora</h1>
    <form action="logica.php" method="POST">
        <label for="">Número 1:</label>
        <input type="number" name="numero1">
        <br><br>

        <label for="">Número 2:</label>
        <input type="number" name="numero2">
        <br><br>
        
        <label for="">Operação:</label>
        <select name="operacao" required>
            <option value="">Selecione a operação</option>
            <option value="soma">+</option>
            <option value="subtracao">-</option>
            <option value="multiplicacao">x</option>
            <option value="divisao">%</option>
        </select>

        <br><br> 

        <button type="submit">Enviar</button>
        <button type="reset">Limpar</button>
    </form>
    
</body>
</html>