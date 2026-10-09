<?php

session_start();

if (!isset($_SESSION["utilizador"])) {
    header("Location: login.html");
    exit();
}

echo "Bem-vindo, " . $_SESSION["utilizador"];

?>