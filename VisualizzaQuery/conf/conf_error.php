<?php

$PHP_SELF = $_SERVER['PHP_SELF'];

if (preg_match("(conf_error.php)",$PHP_SELF)) { 
    Header("Location: index.php");
    die();
}

ini_set('error_reporting', E_ALL & ~E_DEPRECATED & ~E_STRICT);
ini_set('display_errors', 1); // abilita la visualizzazione degli errori a schermo.
ini_set('log_errors', 1); // disabilita il log degli errori.

?>