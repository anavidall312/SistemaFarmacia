<?php 


include_once('conexão.php');

if(isset($_POST['update'])){
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    $imagem = $_POST['imagem'];
    $desc = $_POST["descricao"];
    $unidades = $_POST["unidades"];

$sqlUpdate = "UPDATE produtos SET nome='$nome', valor='$valor', imagem='$imagem', descrição='$desc', unidades='$unidades' WHERE id='$id'";

$result = $conn->query($sqlUpdate);


}

header('Location: sistema.php');


?>