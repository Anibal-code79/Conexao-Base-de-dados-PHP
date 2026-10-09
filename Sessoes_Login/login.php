<?php
session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

if ($email == "admin@gmail.com" && $senha == "1234") {

    $_SESSION["utilizador"] = $email;

    header("Location: painel.php");
    exit();

} else {
    echo "Email ou senha inválidos.";
}

?>