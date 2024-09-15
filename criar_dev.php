<?php

require("connector.php");

if(isset($_POST)) {

    $usuario = $_POST['nome_dev'];
    $senha = $_POST['senha_dev'];

    $query = "INSERT INTO dev (nome_dev,senha_dev) VALUES ('$usuario', '$senha')";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("Location: login_dev.php?criado=sucesso");
}