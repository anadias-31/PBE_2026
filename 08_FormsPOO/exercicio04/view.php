<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercicío 04</title>
    </head>
    <body>
        <h1>Matricula do aluno</h1>
        <form action="logica.php" method="POST">
            <label for="">Nome do aluno:</label><br>
            <input type="text" name="nome">
            <br><br>

            <label for="">Peso do aluno (kg):</label><br>
            <input type="number" name="peso"  step="0.1" required>
            <br><br>

            <label for="">Altura do aluno (m):</label><br>
            <input type="number" name="altura"  step="0.01">
            <br><br>


            <h1>Dados da matrícula</h1>
            <label for="">Plano:</label><br>
            <select name="plano" >
                <option value="">Selecione o plano</option>
                <option value="basico">Básico - R$80,00</option>
                <option value="plus">Plus - R$120,00</option>
                <option value="premium">Premium - R$180,00</option>
            </select>
            <br><br>

            <label for="">Meses:</label><br>
            <input type="number" name="meses" min="1" max="12" required >
            <br><br>

            <p>Modalidades extras</p>
            <input type="checkbox" name="modalidades[]" value="natacao">Natação (+R$60,00)<br>
            <input type="checkbox" name="modalidades[]" value="funcional">Funcional(+R$40,00)<br>
            <input type="checkbox" name="modalidades[]" value="lutas">Lutas(+R$50,00)<br>
            <br><br>

            <button type="submit">Gerar Matrícula</button>
        </form>
    </body>
</html>