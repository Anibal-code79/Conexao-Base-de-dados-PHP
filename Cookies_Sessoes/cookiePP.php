<?php
setcookie("nome", "Idioma", time()+3600);
echo "Cookie Criado";

$nome=$_COOKIE["nome"];
echo "Ola Seja bem vindo".$nome;

