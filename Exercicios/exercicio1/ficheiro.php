<?php

$nome= $_POST["nome"];
$idade= $_POST["idade"];
$sexo= $_POST["sexo"];

if(empty($nome) || empty($idade) || empty($sexo)){
    echo "Prencha todos os campos";
}else{
    echo "<script>
        alert('Ola seja Bem vindo a Pagina');
        alert('Nome: $nome');
        alert('Idade: $idade');
        alert('Sexo: $sexo');
    </script>";
}
?>
