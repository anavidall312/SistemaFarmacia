<?php 


include_once('conexão.php');

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];

$sqlUpdate = "UPDATE usuario SET nome='$nome', email='$email', senha='$senha', cpf='$cpf', rg='$rg', telefone='$telefone' WHERE id='$id'";

$result = $conn->query($sqlUpdate);


}

header('Location: sistema.php');


?>