<?php
    session_start();

    session_unset();
    var_dump($_SESSION);
    if(!(isset($_SESSION["id"]))){
        header("Location:login.php");
    }
    else{
        echo "Erreur.";
    }
?>