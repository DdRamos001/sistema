<?php


//PÁGINA DE LOGIN COM A VÁLIDAÇÃO 
//FINALIZADO


    if(!isset($_POST["btn-submit"])) return;

    session_start();



    define('NAME_VALIDATION_REGEX', "/^(?![ ])(?!.*[ ]{2})((?:e|da|do|das|dos|de|d'|D'|la|las|el|los)\s*?|(?:[A-Z][^\s]*\s*?)(?!.*[ ]$))+$/");

    define('REGISTER_FILE_PATH', "./data/register.json");
    


    $name   = $_POST["login"];
    $passwd = md5($_POST["password"]);



    $_SESSION["INVALID_LOGIN"] = false;



    if(!preg_match_all(NAME_VALIDATION_REGEX, $name)) {


        $_SESSION["INVALID_LOGIN"] = true;

        header("Location: ../index.php");

        return;



    }

    $register_content   = json_decode(file_get_contents(REGISTER_FILE_PATH), true);

    $_SESSION["logged"] = false;
    
    foreach($register_content as $value) {


        if($value["name"] == $name && $value["passwd"] == $passwd) {

            $_SESSION["logged"] = true;

            $_SESSION["name"]   = $name;
            break;


        }
    }

    header("Location: ../logged.php");
?>
