<?php

require("connector.php");

if(isset($_POST)) {

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO jogadores (usuario,senha) VALUES ('$usuario', '$senha')";

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    header("Location: login.php?criado=sucesso");
}