<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atividade LM</title>
</head>
<body>
    <header>
    <h1 style="color:purple; font-family:arial">Inscrição em evento</h1>
    </header>
    <form action="logica.php" method="POST" style="background:#F4E3F5; padding: 15px; border-radius:8px; width:350px">
        <label style="font-family:arial" for="">Nome completo:</label>
        <br>
        <input type="text" name="nome">
        <br><br>

		<label for="tipo" style="font-family:arial">Tipo de ingresso:</label>
        <br>
			<select name="tipo"  required>
					<option value="pista">Pista</option>
					<option value="camarote">Camarote</option>
					<option value="open_bar">Open Bar</option>
				</select>
			<br><br>

        <label for=""style=" font-family:arial">Data do evento:</label>
        <br>
        <input type="date" name="data">
        <br><br>

        <label for=""style="font-family:arial">Hora de chegada:</label>
        <br>
        <input type="time" name="hora">
        <br><br>

        <button type="submit" style="background-color:purple; color:#fff">Inscrever-se</button>   
</body>
</html>