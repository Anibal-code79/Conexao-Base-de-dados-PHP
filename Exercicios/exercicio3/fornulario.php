<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ficheiro.php" method="POST" >
        <label for="lado1">Digite o primeiro lado do triangulo: </label><br>
        <input type="number" name="lado1" id="lado1" required><br><br>

        <label for="lado2">Digite o segundo lado do triangulo: </label><br>
        <input type="number" name="lado2" id="lado2"><br><br>

        <label for="lado3">Digite o Terceiro lado do triangulo: </label><br>
        <input type="number" name="lado3" id="lado3">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>