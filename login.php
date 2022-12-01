
<?php

    session_start();
    include("tabelaprod.php");

    $email = $senha = "";

    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login'])){
        
        if(empty($_POST['email'])){

            echo"sem senha";

        }else{

            $email = $_POST['email'];

        }

        if(empty($_POST['senha'])){

            echo"sem email";

        }else{

            $senha = $_POST['senha'];

        }

        if($senha && $email){

            $sql = "SELECT * FROM usuario WHERE email='".$email."'AND senha = '".MD5($senha)."'";

            $query = mysqli_query($conexao, $sql);

            if(mysqli_num_rows($query) > 0){

                while($registro = mysqli_fetch_array($query)){

                    $_SESSION["login"] = true;
                    $_SESSION["nome"] = $registro["nome"];
                    $_SESSION["email"] = $registro["email"];
                    $_SESSION["adm"] = $registro["admin"];

                }

                header("location:index.php");

            }

        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles/stylelogin.css">
</head>
<body>
    
    <main>
    
        <h1>
            <?php

            if($_SESSION["msg"] != ""){
                echo$_SESSION["msg"];
                $_SESSION["msg"] = ""; 
            }else{
                echo"Seja bem-vindo!";
            }

            ?>
        </h1>

        <form action="" method="post">
            <input type="text" name="email">
            <input type="password" name="senha">
            <input type="submit" name="login" value="Login">
        </form>

    </main>
    

</body>
</html>