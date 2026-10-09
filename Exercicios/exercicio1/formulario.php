<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario De Cadastro</h1><br><br>
    <form action="ficheiro.php" method="POST">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" placeholder="Insere o seu nome"><br><br>

        <label for="idade">Idade: </label>
        <input type="number" name="idade" placeholder="Insere sua idade"><br><br>

        <label for="sexo">Sexo: </label>
        <select name="sexo">
            <option value="">Selecione o sexo</option>
            <option value="M">M</option>
            <option value="F">F</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>