<?php

if (isset($_COOKIE["nome"])) {

    $nome = $_COOKIE["nome"];

} else {

    $nome = "Visitante";
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

    <h1>Dashboard</h1>

    <h2>Bem-vindo, <?php echo $nome; ?>!</h2>

</body>
</html>