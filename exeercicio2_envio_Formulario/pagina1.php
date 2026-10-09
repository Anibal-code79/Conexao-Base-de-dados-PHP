<?php
$nome= $_POST["nome"];
$email= $_POST["email"];
$senha= $_POST["senha"];
$confirmar= $_POST["senhaConfirmo"];

if(empty($nome&$email&$senha)){
    echo "<h2>Preencha todos os campos!</h2>";
}elseif($senha!=$confirmar){
    echo "<h2>Senha invalida, verifica a sua senha</h2>";  
}else{
    echo "<h1>Ola, $nome Seja Bem vindo a nossa pagina</h1><br><br>";
    echo "<h3>Como podemos te ajudar na sua resenha de hoje";

}
?>