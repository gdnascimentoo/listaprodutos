<?php
if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['registrarprod'])){

$nomeprod = $desc = $preco = "";

$nomeprod = mysqli_real_escape_string($conexao, $_POST['nomeprod']);
$desc = mysqli_real_escape_string($conexao, $_POST['desc']);
$preco = mysqli_real_escape_string($conexao, $_POST['preco']);

// if(empty($_POST['nomeprod'])){
//     $nomeprod = null;
// }else{
//     $nomeprod = $_POST['nomeprod'];
// }
// if(empty($_POST['desc'])){
    
// }else{
//     $desc = $_POST['desc'];
// }
// if(empty($_POST['preco'])){
    
// }else{
//     $preco = $_POST['preco'];
// }

if($nomeprod && $desc && $preco){

    $sql = "INSERT INTO produtos(nome, descricao, preco) VALUES ('".$nomeprod."','".$desc."','".$preco."')";

    $query = mysqli_query($conexao, $sql);

    header("parent.location:index.html");

}
}
?>

    <form action="" method="POST">

        <label for="nomeprod">Nome do produto:</label>
        <input type="text" name="nomeprod" id="nomeprod">
        <label for="descprod">Descrição do produto:</label>
        <input type="textarea" name="desc" id="descprod">
        <label for="preco">Preço:</label>
        <input type="number" name="preco" id="preco">
        <input type="submit" name="registrarprod" value="Registrar">

    </form>


<div class="modalcadastro">

    <form action="" method="POST">

        <label for="nomeuser">Nome:</label>
        <input type="text" name="nomeuser" id="nomeuser">
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" id="senha">
        <label for="senha">Confirmar senha:</label>
        <input type="password" name="senhaconfirma" id="senha">
        <input type="radio" name="usertype" value="adm" id="admradio">
        <label for="admradio">Administrador</label>
        <input type="radio" name="usertype" value="user" id="userradio">
        <label for="userradio">Usuário</label>
        <input type="submit" name="registraruser" value="Registrar">

    </form>
</div>