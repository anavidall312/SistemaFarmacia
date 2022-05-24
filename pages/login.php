<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    require('conexão.php');
    
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = $_POST["senha"];
        $cpf = $_POST["cpf"];
        $rg = $_POST["rg"];
        $telefone = $_POST["telefone"];
    
    
        $stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha, cpf, rg, telefone) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssss", $nome, $email, $senha, $cpf, $rg, $telefone);
    
    
        $stmt->execute();
    
    
        $stmt->close();
        $conn->close();
    }
    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="../img/lua-fundo-removido.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/iconfont.min.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <img src="../img/logo sem fundo.png" alt="logo">
                </a>
                <h2>Login</h2>
                <div class="mobile-menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>
                <ul class="nav-list">
                    <li><a class="a-menu" href="../index.php">Início</a></li>
                    <li><a class="a-menu" href="cadastro.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <div class="alinhamento">
        <form method="POST" action="controle.php">
            <h1>Insira seus dados</h1>
            <div class="eye">
                <input class="input" type="text" name="email" placeholder="Email" required/>
            </div>
            <br>
            <div class="eye">
                <input class="input" type="password" name="senha" placeholder="Senha" id="pass" required/>
                <i>
                    <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
                </i>
            </div>
            <br><br><br>
            <a href="cadastro.php" class="cadastro">Cadastre-se</a>
            <input type="submit" value="Enviar"/>

</form>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../scripts/olho.js"></script>
</body>
</html>