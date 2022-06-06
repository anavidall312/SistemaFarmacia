<?php

if($_SERVER["REQUEST_METHOD"] == "POST") {

    require('../pages/conexão.php');
    
        $nome = $_POST["nome"];
        $unidades = $_POST["unidades"];
        $valor = $_POST["valor"];
        $desc = $_POST["descricao"];
    
    
        $stmt = $conn->prepare("INSERT INTO produtos (nome, unidades, valor, descrição) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("siss", $nome, $unidades, $valor, $desc);
    
    
        $stmt->execute();
    
    
        $stmt->close();
        $conn->close();
        header('Location: ../pages/sistema.php');
    }


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/cadProduto.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/lua-fundo-removido.ico" type="image/x-icon">
    <title>Novo Produto</title>
</head>

<body>

<header class="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <h1>Cadastro de Produto</h1>
                </a> 
                <div class="mobile-menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>
                <ul class="nav-list">
                    <li><a class="a-menu" href="#">Área Admin</a></li>
                    <li><a class="a-menu" href="pages/cadastro.php">Cadastro Admin</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="section">
        <form action="cadastrar-produto.php" method="POST">
            <h1 class="title" >Adicionar novo Produto</h1>
            <div class="item">
                <input type="text" class="input" name="nome" placeholder="nome do produto" onclick="verifica()">
                <span class="text">Nome do Produto</label>
            </div>
            <div class="item">
                <input type="number" name="unidades" class="input" placeholder="n de unidades">
                <span class="text">Nº de Unidades</label>
            </div>
            <div class="item">
                <input type="text" class="input" name="valor" id="valor" placeholder="preço">
                <span class="text">Preço</label>
            </div>
            <div class="item">
                <textarea name="descricao" id="descricao" class="textarea" placeholder="descrição"></textarea>
                <span class="text">Descrição</label>
            </div>
            <div class="item">
                <input type="submit" class="input" value="Adicionar">
            </div>
        </form>
    </section>
    
</body>
</html>