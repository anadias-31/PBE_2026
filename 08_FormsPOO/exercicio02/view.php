<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicío 02</title>
    </head>
    <body>
        <form action="logica.php" method="POST">
            <label for="">Nome do aluno:</label><br>
            <input type="text" name="nome" required>
            <br><br>

            <label for="">Turma:</label><br>
            <select name="turma" required>
            <option value="">Selecione a operação</option>
            <option value="primeiro">1°IDS</option>
            <option value="segundo">2°IDS</option>
            <option value="terceiro">3°IDS</option>
            </select>
            <br><br>

            <label for="">Nota 1:</label><br>
            <input type="number" name="nota1" step="0.1" min="0" max="10">
            <br><br>

            <label for="">Nota 2:</label><br>
            <input type="number" name="nota2" step="0.1"  min="0" max="10">
            <br><br>

            <label for="">Nota 3:</label><br>
            <input type="number" name="nota3" step="0.1"  min="0" max="10">
            <br><br>

            <label for="">Faltas:</label><br>
            <input type="number" name="faltas" min="0" max="80">
            <br><br>

            <button type="submit">Gerar Boletim</button>
        </form>
    </body>
</html>