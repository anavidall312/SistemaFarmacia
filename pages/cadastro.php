<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    require('conexão.php');

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $database = "farmacia";
    $servername = "localhost";
    $username = "root";
    $password = "";



    /*
    $sql = "INSERT INTO usuario (nome, email, senha) VALUES (?,?,?)";
    $sql->exec(array($nome,$email,$senha));
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);*/


    $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nome, $email, $senha);


    $stmt->execute();



    echo "New records created successfully";

    $stmt->close();
    $conn->close();

}


?>





<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="../img/Logo.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/iconfont.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <img src="../img/logo sem fundo.png" alt="logo">
                </a>
                <h2>Cadastro</h2>
                <div class="mobile-menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>
                <ul class="nav-list">
                    <li><a class="a-menu-inicial" href="../index.php">Início</a></li>
                    <li><a class="a-menu" href="cadastro.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <div class="alinhamento">
        <form method="POST" action="login.php">
            
            <h1>Insira seus dados</h1>
            <div class="eye">
                <input class="input" type="text" name="nome" id="nome" placeholder="Nome completo">
            </div>
            <div class="eye">
                <input class="input" id="email" name="email" type="email" placeholder="Email" required>
            </div>
            <div class="eye">
                <input class="input" id="senha" name="senha" type="password" placeholder="Senha" id="pass" required>
                    <i>
                        <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
                    </i>
            </div>



            <div class="eye">
                <input class="input" type="text" name="contato" id="contato" placeholder="Contato">
            </div>
            <div class="eye">
                <input class="input" type="text" name="telefone" id="telefone" placeholder="Tel. (88) 99999-9999" maxlength="15">
            </div>
            <input name="robo" type="checkbox"> 
            <label for="robo" style="color:white;">Não sou um robô</label><br><br>
            <input type="submit" value="Enviar">

    </form>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../scripts/olho.js"></script>
<script src="../scripts/telefone.js"></script>
</body>
</html>