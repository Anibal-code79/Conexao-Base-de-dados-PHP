<?php
session_start();
$nome=$_SESSION["nome"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ola, <?php echo $nome?>Seja Bem vindo a nossa Pagina<h1>
    <button>Sair da Pagina</button>
</body>
</html>