<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    
    <main>
    
        <h1>
            <?php

                session_start();

            if($_SESSION["msg"] != ""){
                echo$_SESSION["msg"];
                $_SESSION["msg"] = ""; 
            }else{
                echo"Seja bem-vindo!";
            }

            ?>
        </h1>

        <input type="text" name="email">
        <input type="password" name="senha">
        <input type="submit" name="login" value="Login">

    </main>
    

</body>
</html>