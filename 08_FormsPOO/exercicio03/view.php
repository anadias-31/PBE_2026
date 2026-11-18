<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicío 03</title>
    </head>
    <body>
        <form action="logica.php" method="POST">
            <label for="">Nome do funcionario:</label><br>
            <input type="text" name="nome" required>
            <br><br>

            <label for="">Cargo:</label><br>
            <select name="cargo" required>
            <option value="">Selecione o cargo</option>
            <option value="auxiliar">Auxiliar (salário R$2.200,00)</option>
            <option value="tecnico">Técnico (salário R$3.520,00)</option>
            <option value="analista">Analista (salário R$5.500,00)</option>
            </select>
            <br><br>

            <label for="">Hora extra:</label><br>
            <input type="number" name="horasExtras" min="0" >
            <br><br>

            <label for="">Vale transporte:</label><br>
            <input type="radio" name="valeTransporte" value="sim">
            <label for="">Sim</label><br>
            <input type="radio" name="valeTransporte" value="nao">
            <label for="">Não</label><br><br>

            <button type="submit">Gerar holerite</button>
        </form>
    </body>
</html>