<?php
include('dev_not.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="menu.css">
</head>
<body>
    <h1>Principais Novidades:</h1>
    <div class="menu">
    <?php
    if (isset($sql_query)) {
        while($arquivo = $sql_query->fetch_assoc()) { ?>
            <a href="GAME.php?imagem=<?php echo $arquivo['path'] ; ?>&nome=<?php echo $arquivo['nome'];?>&descricao=<?php echo $arquivo['descricao'];?>"><img class="jogos" src="<?php echo $arquivo['path']; ?>" alt=""></a>
        <?php }
    } ?>
    </div>
    <a href="#" onclick="history.back()" id="exit"><img src="seta.png" alt=""></a>
 <script src="menu.js"></script>
</body>
</html>