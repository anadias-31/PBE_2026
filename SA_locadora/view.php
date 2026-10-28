<!-- Ana lara dias Aparecido
     Pedro Henrique MArtins Biondo -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Auto fácil locadora</title>
</head>
<body>
    <h1>Cadastro do cliente</h1>
    <form action="logica.php" method="POST">
        <h2>Dados do Cliente: </h2>

        <label for="">Nome: </label><br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Email:</label><br>
        <input type="text" name="email">
        <br><br>

        <h2>Dados da locação: </h2>

        <label for="">Data de retirada: </label><br>
        <input type="date" name="data">
        <br><br>

        <label for="">Quantidade de dias:</label><br>
        <input type="number" name="dias">
        <br><br>

        <label for="">Categoria de veículos:</label><br>
        <select name="categoria" required>
            <option value="">Selecione a categoria</option>
            <option value="economico">Econômico</option>
            <option value="intermediario">Intermediário</option>
            <option value="suv">SUV</option>
        </select>
       <br><br>

        <label for="">Seguro Total (R$40,00/dia):</label><br>
        <input type="radio" name="seguro" value="sim">
        <label for="">Sim</label><br>
        <input type="radio" name="seguro" value="nao">
        <label for="">Não</label><br>
        <br>

        <label for="">GPS (R$15,00/dia):</label><br>
        <input type="radio" name="gps" value="sim">
        <label for="">Sim</label><br>
        <input type="radio" name="gps" value="nao">
        <label for="">Não</label><br>
        <br>

        <label for="">Cadeirinha Infantil (R$20,00/dia):</label><br>
        <input type="radio" name="cadeirinha" value="sim">
        <label for="">Sim</label><br>
        <input type="radio" name="cadeirinha" value="nao">
        <label for="">Não</label><br>
        <br>

        <button type="submit" style="background-color:blue;color:white">Gerar Contrato</button>

    </form>
</body>
</html>