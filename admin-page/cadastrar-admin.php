<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    require('../pages/conexão.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $stmt = $conn->prepare("INSERT INTO `admin` (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);


    $stmt->execute();

header('Location: ../pages/sistema.php');
    $stmt->close();
    $conn->close();

}
 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadAdmin.css">
    <link rel="shortcut icon" href="../img/lua-fundo-removido.ico" type="image/x-icon">
    <title>Novo Admin</title>
</head>
<body>
    
    <form method="POST" action="cadastrar-admin.php">
        <h1>Cadastro de novo Admin</h1>
        <div class="input">
        <input type="text" placeholder="Nome" name="nome" id="nome" required="required" autocomplete="off"></div>
        <div class="input">
        <input type="email" placeholder="Email" name="email" id="email" required="required" autocomplete="off"></div>
        <div class="input">
        <input type="password" name="senha" id="senha" placeholder="Senha" required="required"></div>
        <div class="input">
            <input type="submit" value="Cadastrar">
        </div>
    </form> 
</body>
</html>