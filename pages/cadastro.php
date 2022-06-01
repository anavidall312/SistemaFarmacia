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
    $stmt->bind_param("sss", $nome, $email, $senha, $cpf, $rg, $telefone);


    $stmt->execute();


    $stmt->close();
    $conn->close();
header('Location: login.php');
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
    <link rel="stylesheet" href="../css/cadastro.css">
    <title>Cadastro</title>
    <script>
        function mascara_cpf(){

            var cpf = document.getElementById('cpf');
            if(cpf.value.length == 3 || cpf.value.length == 7){
                cpf.value += "."
            } else if(cpf.value.length == 11){ 
                cpf.value += "-"
            }
        }
    </script>
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
                    <li><a class="a-menu" href="../index.php">Início</a></li>
                    <li><a class="a-menu" href="login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <div class="alinhamento">
        <form method="POST" action="login.php">
            
            <h1>Insira seus dados</h1>
            <div class="eye">
               <input class="input" type="text" name="nome" id="nome" autocomplete="off" required/>
               <label for="nome">Nome</label>
            </div>
            <div class="eye">
                <input class="input" id="email" name="email" type="email" autocomplete="off" required/>
                <label for="email">Email</label>
            </div>
            <div class="eye">
                <!-- <div class="inpute">
                    <input class="input" name="senha" type="password" id="input" required/>
                    <label for="senha">Senha</label>
                    <img src="http://i.stack.imgur.com/H9Sb2.png" alt="">
                </div> -->

            <div id="div-input">
                <input type="password" class="input" name="senha" required/>
                <label for="senha">Senha</label>
                </div>
            </div>

            <div class="eye">
            <input type="text" class="input" name="cpf" id="cpf" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="11" autocomplete="off" required />
                <label for="cpf">Cpf</label>
            </div>
            <div class="eye">
                <!-- <input class="input" type="text" name="rg" id="rg" maxlength="11" autocomplete="off" required/> -->
                <input type="text" class="input" name="rg" id="rg" onfocus="javascript: retirarFormatacao(this);" onblur="javascript: formatarCampo(this);" maxlength="11" autocomplete="off" required />
                <label for="rg">Rg</label>
            </div>
            <div class="eye">
                <input class="input" type="text" name="telefone" id="telefone" maxlength="15" autocomplete="off" required/>
                <label for="telefone">Telefone</label>
            </div>
            <input type="submit" value="Enviar">

        </form>
    </div> 

<script src="../scripts/olho2.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../scripts/telefone.js"></script>
</body>
</html>