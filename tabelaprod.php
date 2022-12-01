<?php

    $host = "localhost";
    $user = "root";
    $password = "root";
    $banco = "trabalhopetryphp";

    $conexao = mysqli_connect($host, $user, $password);

    if($conexao){

        $database = mysqli_select_db($conexao, $banco);

    }

?>