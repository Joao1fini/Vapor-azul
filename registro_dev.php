<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login_dev.css">
    
</head>
<body>
<div class="menu">
    <form action="criar_dev.php" method="post">
    <h1>Registro de desenvolvedor:</h1>
    <h3>
    nome:<input type="text" name="nome_dev"><br>
    <br>
    senha:<input type="password" name="senha_dev">
    <br>
    </h3>
    <input type="submit" value="registro" class="login">
    </form>
</div>
<a href="#" onclick="history.back()" id="exit"><img src="seta.png" alt=""></a>
</body>
</html>