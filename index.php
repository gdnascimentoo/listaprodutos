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
    <link rel="stylesheet" href="/styles/stylegeral.css">

    <?php
    
        if($_SESSION["adm"] == true){
            echo"<link rel=\"stylesheet\" href=\"/styles/styleadm.css\">";
        }else{
            echo"<link rel=\"stylesheet\" href=\"/styles/styleuser.css\">";
        }

    ?>

</head>
<body>
    
    <table>

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Preço</th>
        </tr>

        <?php
        
            include("tabelaprod.php");

            $sql = "SELECT * FROM produtos";

            $query = mysqli_query($conexao, $sql);

            while($tabela = mysqli_fetch_array($query)){

                echo"<tr><td>".$tabela['prodid']."</td>";
                echo"<td>".utf8_encode($tabela['nome'])."</td>";
                echo"<td>".utf8_encode($tabela['descricao'])."</td>";
                echo"<td>".number_format($tabela['preco'], 2, '.', '')."</td></tr>";

            }

        ?>

    </table>

    <?php
    
            if($_SESSION["adm"] == true){

                include("admmodals.php");

                if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registraruser'])){

                    $nome = $senha = $email = $admin = "";

                    if(empty($_POST['nomeuser'])){
                        
                    }
                    if(empty($_POST['email'])){
                        
                    }
                    if(empty($_POST['senha'])){

                    }else{
                        if($_POST['senha'] == $_POST['senhaconfirma']){
                            
                        }else{

                        }
                    }
                    if(empty($_POST['usertype'])){
                        
                    }

                }

                



                }
            
            
            

            


    ?>

</body>
</html>