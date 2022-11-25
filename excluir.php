<?php


include('tabelaprod.php');

if(isset($_GET['prodid'])){

    $id = $_GET['prodid'] ;

    $sql = "DELETE FROM produtos WHERE prodid=$id";
    $query = mysqli_query($conexao, $sql);

    header("location:index.php");

}



?>