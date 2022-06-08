<?php
if(!empty($_GET['id'])){
    include_once('conexão.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM produtos WHERE id=$id";


$result = $conn->query($sqlSelect);

if($result->num_rows > 0){

    while($user_data = mysqli_fetch_assoc($result)){
    $nome = $user_data["nome"];
    $valor = $user_data["valor"];
    $unidades = $user_data["unidades"];
    $imagem = $user_data["imagem"];
    $desc = $user_data["descrição"];
    }


} else {
    header('Location: sistema.php');
}

    




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
        <form action="saveEditProduto.php" method="POST">
            <h1 class="title" >Adicionar novo Produto</h1>
            <div class="item">
                <input type="text" class="input" name="nome" placeholder="nome do produto" value="<?php echo $nome?>" onclick="verifica()">
                <!-- <span class="text">Nome do Produto</label> -->
            </div>
            <div class="item">
                <input type="number" name="unidades" class="input" placeholder="n de unidades" value="<?php echo $unidades?>" >
                <!-- <span class="text">Nº de Unidades</label> -->
            </div>
            <div class="item">
                <input type="text" class="input" name="valor" id="valor" placeholder="preço" value="<?php echo $valor?>" >
                <!-- <span class="text">Preço</label> -->
            </div>
            <div class="item">
                <input type="text" class="input" name="imagem" id="imagem" placeholder="Link da Imagem" value="<?php echo $imagem?>" >
                <!-- <span class="text">Preço</label> -->
            </div>
            <div class="item">
                <textarea name="descricao" id="descricao" class="textarea" placeholder=" Descrição"><?php echo $desc?></textarea>
                <!-- <span class="text">Descrição</label> -->
            </div>
            <div class="item">
                <input type="hidden" name="id" value="<?php echo $id?>">
                <input type="submit" name="update" id="update" class="input" value="Alterar">
            </div>
        </form>
    </section>
    
</body>
</html>