<?php

$host="localhost";
$user="root";
$pass="";
$bd="rascunho";

$mysqli = new mysqli($host,$user,$pass,$bd);

if(isset($_FILES['arquivo'])){
    $arquivo=$_FILES['arquivo'];;
    if($arquivo['error'])
        die("falha ao enviar");

    $descricao=$_POST['descricao'];
    $pasta='uploads/';
    $nome=$_POST['nome'];
    $extensao=strtolower(pathinfo($arquivo['name'],PATHINFO_EXTENSION));
    $path=$pasta.$nome.".".$extensao;
    if($extensao != "jpg" && $extensao != 'png')
        die("tipo de arquivo nao aceito");

    $certo=move_uploaded_file($arquivo["tmp_name"],$path);

    if($certo){
        $mysqli->query("INSERT INTO jogos(nome,path,descricao) VALUES('$nome','$path','$descricao')") or die($mysqli->error);
         echo "funcionou";
    }
    else
        echo "errou";
}

$sql_query = $mysqli->query("SELECT * FROM jogos") or die($mysqli->error);


if ($mysqli->connect_errno) {
    echo "conexão falhou". $mysqli->connect_error;
    exit();
}
?>