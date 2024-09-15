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
    <form action="criar_registro.php" method="post">
    <h1>Registro:</h1>
    <h3>
    nome de usuario:<input type="text" name="usuario"><br>
    <br>
    senha:<input type="text" name="senha">
    <br><br>
    </h3>
    <input type="submit" value="registro" class="registro">
    </form>
</div>
<a href="#" onclick="history.back()" id="exit"><img src="seta.png" alt=""></a>
</body>
</html>