<?php

//PÁGINA DE REGISTRO
//FINALIZADO

    if(!isset($_POST["btn-submit"])) return;
    
   
    define('NAME_VALIDATION_REGEX', "/^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-Z][^\s]*\s*?)(?!.*[ ]$))+$/");


    define('REGISTER_FILE_PATH', "./data/register.json");


    session_start();

    $_SESSION["INVALID_PASSWORD"] = false;

   
   
    if($_POST["password"] != $_POST["confirm-password"]) {

        $_SESSION["INVALID_PASSWORD"] = true;

        
        header("Location: ../registro.php");

        return;


    }

    $user["name"]   = $_POST["login"];

    $user["passwd"] = md5($_POST["password"]);

    $register_content = json_decode(file_get_contents(REGISTER_FILE_PATH), true);

    
    if(is_null($register_content)) {

        $file = fopen(REGISTER_FILE_PATH, "w");

        fwrite($file, json_encode([$user]));

        fclose($file);

        header("Location: ../index.php");

        return;

    }

    
    array_push($register_content, $user);

    $file = fopen(REGISTER_FILE_PATH, "w");

    fwrite($file, json_encode($register_content));

    fclose($file);


    header("Location: ../index.php");
?>
