<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $kg_morango=floatval($_POST["morango"]);
    $kg_manca=floatval($_POST["manca"]);

    if($kg_morango<=5){
        $preco_morango=$kg_morango*250;
    }else{
        $preco_morango=$kg_morango*220;
    }

    if($kg_manca<=5){
        $preco_manca=$kg_manca*220;
    }else{
        $preco_manca=$kg_manca*150;
    }

    $total_quantidade=$kg_manca+$kg_morango;
    $total_preco= $preco_manca+$preco_morango;

    if($total_quantidade>8 || $total_preco>250){
        $total_preco= $total_preco*0.90;
    }

    echo "<h1>Resultado da suas Compras</h1>";
    echo "<strong>O preco das sua quantidade de morangos e mancas e de: ".number_format($total_preco,2)."MT <strong>";
}else{
    echo "Acesso Invalido";
}
?>