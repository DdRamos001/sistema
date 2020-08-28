<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles/styles.css">
        <title>REGISTRAR</title>
    </head>
    <body>
        <div class="form-wrapper">
            <form action="./server/register.php" method="POST" autocomplete="off" class="form-registro">
                <label for="login">Login </label>
                
                <div class = "login">
                    <input type="text" name="login" pattern="^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-Z][^\s]*\s*?)(?!.*[ ]$))+$" required>
                </div>
            
                <label for="password">Senha </label>
                
                <div class="password">
                    <input type="password" name="password" required>
                </div>

                <label for="password">Repita sua senha</label>

                <div class="password">
                    <input type="password" name="confirm-password" required>
                </div>

                <div class="btn-submit">
                    <input type="submit" name="btn-submit" value="Registrar">
                </div>
            </form>
        </div>
    </body>
</html>