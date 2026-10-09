<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $nome = $_POST["nome"];

    setcookie("nome", $nome, time()+3600);

    header("Location: cookie_dashboard.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cookie - Login</title>
</head>
<body>

    <h1>Login</h1>
    <form method="POST">

        <label>Nome:</label>
        <input type="text" name="nome">

        <button type="submit">Entrar</button>

    </form>

</body>
</html>