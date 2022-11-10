<?php

    session_start();

    if(!(isset($_SESSION["login"]))){
        $_SESSION["msg"] = "Para usar o sistema, você precisa estar logado:";
        header("location:login.php");
    }

?>