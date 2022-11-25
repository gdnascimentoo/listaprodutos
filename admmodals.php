<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrarprod'])){

$nomeprod = $desc = $preco = "";

if(empty($_POST['nomeprod'])){

}else{
    $nomeprod = $_POST['nomeprod'];
}
if(empty($_POST['desc'])){
    
}else{
    $desc = $_POST['desc'];
}
if(empty($_POST['preco'])){
    
}else{
    $preco = $_POST['preco'];
}

if($nomeprod && $desc && $preco){

    $sql = "INSERT INTO produtos(nome, descricao, preco) VALUES ('".$nomeprod."','".$desc."','".$preco."')";

    $query = mysqli_query($conexao, $sql);

    Header('Location: '.$_SERVER['PHP_SELF']);

}
}

if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registraruser'])){

    $nomeuser = $email = $senha = "";
    $adm;
    
    if(empty($_POST['nomeuser'])){
    }else{
        $nomeuser = $_POST['nomeuser'];
    }
    
    if(empty($_POST['email'])){
    }else{
        $email = $_POST['email'];
    }

    if(empty($_POST['senha']) || $_POST['senha'] != $_POST['senhaconfirma']){
    }else{
        $senha = MD5($_POST['senha']);
    }
    
    if(empty($_POST['usertype'])){
    }else{
        if($_POST['usertype'] == "adm"){
            $adm = 2;
        }else{
            $adm = 1;
        }
    }

    if($adm){
        echo("oi");
    }

    if($nomeuser && $email && $senha && $adm){

        $adm--;

        $sql = "INSERT INTO usuario(nome, email, senha, admin) values('".$nomeuser."', '".$email."', '".$senha."', '".$adm."')";

        $query = mysqli_query($conexao, $sql);

        Header('Location: '.$_SERVER['PHP_SELF']);

    }

}

?>

    <form action="" method="POST" target="_self">

        <label for="nomeprod">Nome do produto:</label>
        <input type="text" name="nomeprod" id="nomeprod" autocomplete="off">
        <label for="descprod">Descrição do produto:</label>
        <input type="textarea" name="desc" id="descprod" autocomplete="off">
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco" autocomplete="off">
        <input type="submit" name="registrarprod" value="Registrar">

    </form>


<div class="modalcadastro">

    <form action="" method="POST" target="_self">

        <label for="nomeuser">Nome:</label>
        <input type="text" name="nomeuser" id="nomeuser" autocomplete="off">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha" autocomplete="off">
        <label for="senha">Confirmar senha:</label>
        <input type="password" name="senhaconfirma" id="senhaconfirma">
        <input type="radio" name="usertype" value="adm" id="admradio" autocomplete="off">
        <label for="admradio">Administrador</label>
        <input type="radio" name="usertype" value="user" id="userradio" autocomplete="off">
        <label for="userradio">Usuário</label>
        <input type="submit" name="registraruser" value="Registrar">

    </form>
</div>