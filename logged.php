<?php session_start() ?>    
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/logged.css">
        <title>Acesso</title>
    </head>
    <body>
        <?php 
            if($_SESSION["logged"])
                echo("<h1>LOGADO COM SUCESSO.<br>".""."<br>Olá ".$_SESSION["name"].", Seja bem vindo!</h1>");
            
            else
                echo("<h1>Falha no login, por favor, tente novamente</h1>");
        ?>

        <a href="index.php">Tela de login</a>
    </body>
</html>
