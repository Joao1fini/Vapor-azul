<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Configurações de conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Substitua pelo seu nome de usuário do MySQL
$password = "";     // Substitua pela sua senha do MySQL
$dbname = "rascunho";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Consultar o banco de dados para recuperar a imagem
$sql = "SELECT jogo_up FROM jogos LIMIT 1"; // Altere o LIMIT ou adicione condições conforme necessário
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Recuperar o conteúdo da imagem
    $row = $result->fetch_assoc();
    $imagem_conteudo = $row['jogo_up'];

    // Definir o cabeçalho para o tipo de imagem apropriado
    header("Content-type: image/jpeg"); // Altere o tipo MIME conforme necessário
    echo $imagem_conteudo;
} else {
    echo "Nenhuma imagem encontrada.";
}

// Fechar a conexão com o banco de dados
$conn->close();
?>
