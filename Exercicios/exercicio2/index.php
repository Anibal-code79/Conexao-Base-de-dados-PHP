<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ficheiro.php" method="POST">
        <label for="morango">Quantidade de Morrango em Quilos (kg): </label><br>
        <input type="number" name="morango" id="morango" required><br><br>

        <label for="manca">Quantidade de Manca em Quilos (kg): </label><br>
        <input type="number" name="manca" id="manca"><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>