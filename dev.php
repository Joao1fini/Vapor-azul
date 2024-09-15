<?php

include("dev_not.php");

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login e Envio de Imagen</title>
    <link rel="stylesheet" href="dev.css">
</head>
<body>
    <form enctype="multipart/form-data" method="POST">
        
    nome do game:<input type="text" name="nome"> <br>
    <p><label for="">selecione o arquivo</label>
        <input name="arquivo" type="file"></p>
        descrição do seu game:<input type="text" name="descricao"> <br><br>
        <button type="submit" name="upload">enviar</button>
    </form>
    <a href="#" onclick="history.back()" id="exit"><img src="seta.png" alt=""></a>
</body>
</html>

</html>
