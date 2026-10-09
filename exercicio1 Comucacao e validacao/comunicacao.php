<?php

$nome = $_GET["nome"];
$email= $_GET["email"];

if (empty($nome&$email)) {
    echo "O nome e o email é obrigatório.";
} else {
    echo "Nome recebido: " . $nome."<br>";
    echo "Email Recebido: ".$email;
}

?>