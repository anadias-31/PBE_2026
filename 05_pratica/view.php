<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>PetLove</title>
    <link rel="stylesheet" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS_FTCsO3Rt-7gENdWUG9cWJE7rUSIBvdvGR_Ydyiqnrg&s=10">
</head>

<body style="background-color:#fff;">
    <img src="pet.png" style="width:20%; display: flex; margin-left: auto; margin-right: auto">


    <h1 style= "text-align:center; background-color:#01A6C6; color:#fffff" >Cadastre seu Pet 🐾 </h1>
    
    <form action="logica.php" method="post">
        <h2 style="color:#FE7702">Dados do animal</h2>
        <label for="">Nome do responsavel:</label><br>
        <input type="text" name="nome_dono">
        <br><br>

        <label for="">Nome do animal:</label><br>
        <input type="text" name="nome_animal">
        <br><br>

        <label for="">Raça:</label><br>
        <select name="raca" required>
            <option value="">Selecione raça do seu pet</option>
            <option value="golden">Golden</option>
            <option value="bul-dog">Bull Dog</option>
            <option value="pincher">pincher</option>
            <option value="spitz">Lulu da Pomerania</option>
            <option value="chiuaua">Chiuaua</option>
            <option value="pastor">Pastor Alemão</option>
        </select>
        <br>

        <br>
        <label for="">Porte:</label><br>
        <input type="radio" name="porte" value="grande">
        <label for="">Grande</label><br>
        <input type="radio" name="porte" value="medio">
        <label for="">Medio</label><br>
        <input type="radio" name="porte" value="pequeno">
        <label for="">Pequeno</label><br>

        <br>
        <label for="">Data de nascimento:</label><br>
        <input type="date" name="data_nascimento">
        <br><br>

        <label for="">Serviço:</label><br>
        <input type="checkbox" id="banho" name="servico[]" value="banho">
        <label for="banho">Banho</label><br>

        <input type="checkbox" id="tosa" name="servico[]" value="tosa">
        <label for="tosa">Tosa higiênica</label><br>

        <input type="checkbox" id="estetica" name="servico[]" value="estetica">
        <label for="estetica">Tratamentos estéticos e terapêuticos</label><br>

        <input type="checkbox" id="exames" name="servico[]" value="exames">
        <label for="exames">Consultar exames</label><br>


        <button style="background-color:#FE7702"type="submit">Cadastrar animal</button>
        <button type="reset" style="background-color:#2A8EFF">Limpar</button>
    
    </form>  
</body>
</html>