<?php
    try{
        $servidor="mysql: host=localhost;dbname=biblioteca22";
        $usuario="root";
        $senha="";
        $pdo= new PDO($servidor,$usuario,$senha);
        echo "Conexao com a base de dados feita com sucesso!";
        echo "<br><br>";
    }catch(PDOException $erro){
        echo "Erro de Conexao: ".$erro->getMessage();
    }
    /*

    try{
    $sql="create table livros(
        id int auto_increment primary key,
        titulo varchar(120),
        autor varchar(120),
        ano_publicacao int
        );";

    $stmt= $pdo->prepare($sql);
    $stmt->execute();

    echo "tabela criada com sucesso";

    }catch(PDOException $erro){
        echo "Erro de execucao".$erro->getMessage();
    }
    
    echo "<br><br>";
    */
    /*
    try{
        $sql="Insert into livros(titulo,autor,ano_publicacao)
        values(:titulo,:autor,:ano_publicacao)";

        $stmt= $pdo->prepare($sql);

        $stmt->execute([
            ':titulo'=>"A Bela vista do Amanha",
            ':autor'=>"Leo dambo",
            ':ano_publicacao'=>2025
        ]);

        $stmt->execute([
            ':titulo'=>"Programacao Orientada a Objectos",
            ':autor'=>"Allan utcxavho",
            ':ano_publicacao'=>2015
        ]);

        $stmt->execute([
            ':titulo'=>"Saber programar em Python",
            ':autor'=>"Anibal Mutevui",
            ':ano_publicacao'=>2022
        ]);

        echo "<br>";
        echo "Livros adicionados com sucesso na base de dados";
    }catch(PDOException $erro){
        echo "Mensagem de erro".$erro->getMessage();
    }
    echo "<br><br>";
    */
    
    
    try{
    $sql="Select * from livros";

    $stmt= $pdo->prepare($sql);
    $stmt->execute();
    while ($livro=$stmt->fetch(PDO::FETCH_ASSOC)){
        echo "ID: ".$livro['id']."<br>";
        echo "Titulo: ".$livro['titulo']."<br>";
        echo "Autor: ".$livro['autor']."<br>";
        echo "Ano da Publicacao: ".$livro['ano_publicacao']."<br><br><br>";
    };
    }catch(PDOException $erro){
        echo "Erro da Leitura: ".$erro->getMessage();
    }
    echo "<br><br>";


    /*
    try{
         $sql="update livros set ano_publicacao= :ano_publicacao where id=:id";
         $stmt= $pdo->prepare($sql);

         $stmt->execute([
            ':ano_publicacao' => 2026,
            ':id'=> 2
         ]);
         echo "Livro actualizado com sucesso";
    }catch(PDOException $erro){
        echo "Erro de Atualizacao: ".$erro->getMessage();
    }
    echo "<br><br>";
    */

    /*
    try{
         $sql="delete from livros where id= :id";
         $stmt= $pdo->prepare($sql);

         $stmt->execute([
            ':id'=> 3
         ]);
         echo "Livro eliminado com sucesso";
    }catch(PDOException $erro){
        echo "Erro de Atualizacao: ".$erro->getMessage();
    }
    echo "<br><br>";
    */

    try{
    $sql="Select * from livros";
    $stmt= $pdo->prepare($sql);
    $stmt->execute();

    echo "<h1>Lista de Livros</h1><br><br>";
    echo "<table border='1'>";
    echo "<thead>";
    echo "<tr><th> ID </th><th> Titulo </th><th> Autor </th><th> Ano da publicacao </th></tr>";
    while($livro= $stmt->fetch(PDO::FETCH_ASSOC)){
        echo "<tbody>";
        echo "<tr>";
        echo "<td>".$livro['id']."</td>";
        echo "<td>".$livro['titulo']."</td>";
        echo "<td>".$livro['autor']."</td>";
        echo "<td>".$livro['ano_publicacao']."</td>";
        echo "</tr>";
        echo "</tbody>";
    }
    echo "</table>";
    }catch(PDOException $erro){
        echo "Erro de Leitura: ".$erro->getMessage();
    }
?>