<?php
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome=$_POST["nome"];
    $senha=$_POST["senha"];
    $_SESSION["nome"]=$nome;
    header("Location: dasboard.php");
    exit;   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <form action="login.php" method="POST">

    <label>Nome:</label>
    <input type="text" name="nome">
    <br><br>
    <label>Senha:</label>
    <input type="password" name="senha">
    <button type="submit">Enviar</button>

</head>
<body>
    
</body>
</html>