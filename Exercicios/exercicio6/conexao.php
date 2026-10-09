<?php
try {
    $servidor = "mysql:host=localhost;dbname=mtbiblioteca";
    $user = "root";
    $senha = "";
    $pdo = new PDO($servidor, $user, $senha);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    echo "Conexão feita com sucesso!<br>";
} catch(PDOException $e) {
    echo ("Erro na conexão: " . $e->getMessage());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titulo = $_POST["titulo"];
    $autor = $_POST["autor"];
    $ano_publicacao = $_POST["ano_publicacao"];
    $editora = $_POST["editora"];
    $editor = $_POST["editor"];
    $isdn = $_POST["isdn"];
    $numero_pagina = $_POST["numero_pagina"];
    $volume = $_POST["volume"];

    $sql = "INSERT INTO livros (titulo, autor, ano_publicacao, editora, editor, isdn, numero_pagina, volume) 
            VALUES (:titulo, :autor, :ano_publicacao, :editora, :editor, :isdn, :numero_pagina, :volume)";

    $stmt = $pdo->prepare($sql);

    $stmt->execute([
        ":titulo"         => $titulo,
        ":autor"          => $autor,
        ":ano_publicacao" => $ano_publicacao,
        ":editora"        => $editora,
        ":editor"         => $editor,
        ":isdn"           => $isdn,
        ":numero_pagina"  => $numero_pagina,
        ":volume"         => $volume
    ]);
    echo "<br>";
    echo "Dados enviados com sucesso à base de dados!";
}
?>
