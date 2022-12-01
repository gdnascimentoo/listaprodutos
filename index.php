<?php

    session_start();

    if($_SESSION["login"] == false){
        $_SESSION["msg"] = "Para usar o sistema, você precisa estar logado:";
        header("location:login.php");
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Produtos</title>
    <?php
    
        if($_SESSION["adm"] == true){
            echo"<link rel=\"stylesheet\" href=\"styles/styleadm.css\">";
        }else{
            echo"<link rel=\"stylesheet\" href=\"styles/styleuser.css\">";
        }

    ?>

</head>
<body>
    
    <nav id="navlinks">
    
        <ul>
        <?php
        if($_SESSION["adm"] == true){
        echo"
        <li id=\"cadprod\">CADASTRAR PRODUTO</li>
        <li id=\"caduser\">CADASTRAR USUÁRIO</li>";
        }
        ?>
        <a href="logout.php"><li>LOG OUT</li></a>

        </ul>

    </nav>

    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
            <?php
            if($_SESSION["adm"] == true){

                echo"<th style=\"width:40px;\">Excluir</th>";
            
            }
            ?>
        </tr>

        <?php
        
            include("tabelaprod.php");

            $sql = "SELECT * FROM produtos";

            $query = mysqli_query($conexao, $sql);

            while($tabela = mysqli_fetch_array($query)){

                echo"<tr><td>".$tabela['prodid']."</td>";
                echo"<td>".utf8_encode($tabela['nome'])."</td>";
                echo"<td>".utf8_encode($tabela['descricao'])."</td>";
                echo"<td>".number_format($tabela['preco'], 2, '.', '')."</td>";

                if($_SESSION["adm"] == true){

                    echo"<td><a href='excluir.php?prodid=".$tabela['prodid']."'><img src=\"img/cancelar.png\"></a></td></tr>";

                }else{
                    echo("</tr>");
                }

            }

        ?>

    </table>

    <?php    
            if($_SESSION["adm"] == true){
                include("admmodals.php");
            }       
    ?>

</body>
</html>