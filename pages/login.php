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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                <ul class="nav-list">
                    <li><a class="a-menu" href="../index.php">Início</a></li>
                    <li><a class="a-menu" href="cadastro.php">Cadastro</a></li>
                </ul>
            </nav>
        </div>
    </header>




        <form method="POST" action="controle.php">
            <h1>Insira seus dados</h1>
            <div class="eye">
                <input class="input" type="text" name="email" placeholder="Email" required/>
            </div>
            <br>
            <div class="eye">
                <div id="div-input">
                    <input type="password" class="input" name="senha" placeholder="Senha" required/>
                    <i class="bi bi-eye">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                        </svg>
                    </i>
                </div>
            </div>
            <div class="justify">
                <a href="cadastro.php" class="cadastro">Cadastre-se</a>
                <input type="submit" value="Entrar"/>
            </div>
        </form>

<script src="../scripts/olho2.js"></script>
</body>
</html>