<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $lado1=$_POST["lado1"];
    $lado2=$_POST["lado2"];
    $lado3=$_POST["lado3"];

    if($lado1+$lado2>$lado3){
        echo "<h1>A forma e um triangulo</h1>";
        echo "<br><br>";

        if($lado1==$lado2 && $lado2==$lado3){
            echo "<strong>Equilatero</strong>";
        }
        if($lado1==$lado2||$lado1==$lado3||$lado2==$lado3){
            echo "<strong>Isosceles</strong>";
        }
        if($lado1!=$lado2 && $lado2!=$lado3){
            echo "<strong>Esclaneno</strong>";
        }
    }else{
        echo "<h1>Essa forma nao e um triangulo</h1>";
    }
    echo "<br><br>";
}


