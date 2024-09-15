<?php
// login_processa.php

// Conexão com o banco de dados
$servername = "localhost";
$usuario = "root";
$senha = "";
$dbname = "rascunho";

$conn = new mysqli($servername, $usuario, $senha, $dbname);

// Verifica se a conexão foi estabelecida corretamente
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Obter os dados do formulário
$usuario = $_POST['nome_dev'];
$senha = $_POST['senha_dev'];

// Consulta SQL para verificar se o usuário e senha estão corretos
$sql = "SELECT * FROM dev WHERE nome_dev = '$usuario' AND senha_dev = '$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Usuário autenticado com sucesso
    session_start();
    $_SESSION['dev_nome'] = $usuario;
    header("Location: dev.php"); // Redireciona para a página após o login
} else {
    // Usuário ou senha incorretos
    echo "Usuário ou senha incorretos. <a href='login.php'>Tente novamente</a>";
}

$conn->close();
?>
