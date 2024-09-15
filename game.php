<?php
include('dev_not.php')
?>
<?php
// Obtém o caminho da imagem do parâmetro da URL
$imagem = $_GET['imagem'];
$nome = $_GET['nome'];
$descricao= $_GET['descricao'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="game.css">
</head>
<body>
    <h1><?php echo $nome; ?></h1>
    <p><?php echo $descricao ?></p>
    <img src="<?php echo $imagem; ?>" alt="">
    <a href="#" onclick="history.back()" id="exit"><img src="seta.png" alt=""></a>
</body>
</html>