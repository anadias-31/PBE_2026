<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 1</title>
</head>
<body>
    <h1>Cadastro de usuário</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <br><br>

        <label for="">Email:</label>
        <input type="email" name="email">
        <br><br>

        <label for="">Senha:</label>
        <input type="password" name="senha">
        <br><br>

        <button type="submit">Cadastrar</button>
        <button type="submit">Limpar</button>
</body>
</html>