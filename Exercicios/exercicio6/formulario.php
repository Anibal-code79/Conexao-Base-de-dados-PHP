<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conexao.php" method="POST">
        
        <label>Titulo</label>
        <input type="text" name="titulo"><br>
        <label>Autor</label>
        <input type="text" name="autor"><br>
        <label>Ano da Publicacao</label>
        <input type="number" name="ano_publicacao"><br>
        <label>Editora</label>
        <input type="text" name="editora"><br>
        <label>Editor</label>
        <input type="text" name="editor"><br>
        <label>ISDN</label>
        <input type="text" name="isdn"><br>
        <label>Numero de paginas</label>
        <input type="number" name="numero_pagina"><br>
        <label>Volume</label>
        <input type="number" name="volume"><br><br><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>