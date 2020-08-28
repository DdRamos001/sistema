<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PÁGINA DE LOGIN</title>
        <link rel="stylesheet" href="./styles/styles.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>

    <h1 class="explanation">Sistema de Login para disciplina de Criação de Sites II do curso técnico de informática da Escola Técnica Estadual Monteiro Lobado</h1>
    <h2 class="explanation2">Criado pelo aluno Diogo de Assis de Souza Ramos</h2>

        <?php if(@$_SESSION["INVALID_LOGIN"]) echo("<script> alert('Invalid Login'); </script>") ?>

        <div class="form-wrapper">
            <form action="./server/login.php" method="POST" autocomplete="off" class="form-registro">
                <label for="login"></label>
                
                <div class = "login">
                    <input type="text" name="login" placeholder='Nome' pattern="^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-Z][^\s]*\s*?)(?!.*[ ]$))+$" required>
                </div>
            
                <label for="password"></label>

                <div class="password">
                    <input type="password" name="password" placeholder='Senha' required>
                </div>

                <div class="btn-submit">
                    <input type="submit" name="btn-submit" value="Logar">
                </div>

                <a href="registro.php">Criar uma nova conta</a>
            </form>
            
        </div>
    </body>
</html>
