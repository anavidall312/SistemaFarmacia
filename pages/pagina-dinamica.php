<?php
include_once('conexão.php');
if(!empty($_GET['id'])){

$data = $_GET['id'];
$sqlProdutos = "SELECT * FROM produtos WHERE id = '$data'";

$resultProdutos = $conn->query($sqlProdutos);

$data = $resultProdutos->fetch_assoc();

} 


?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/lua-fundo-removido.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../css/dinamica.css">
    <title><?php echo $data['nome']?></title>
</head>
<body>

<header class="header">
        <div class="container">
            <nav class="nav">
                <a href="../produtos.php" class="logo">
                    <!-- <img src="../../img/logo sem fundo.png" alt="logo"> -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
</svg>
                </a> 
                <div class="mobile-menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>
                <ul class="nav-list">
                    <li><a class="a-menu" href="../../index.php">Início</a></li>
                </ul>
            </nav>
        </div>
    </header>



<section class="section">
<div class="card">
    <img src="../<?php echo $data['imagem']?>" alt="...">
    <h1 class="valor">R$ <?php echo $data['valor'] ?></h1>
</div>

<div class="opções">
    <form action="#"  method="POST" class="form">
        <h3>Decrição</h3>
        <p class="descrição">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur aspernatur dicta voluptates quaerat, omnis delectus maxime officiis fugit dolorum laboriosam. Laborum id impedit est consequuntur eaque hic dolor pariatur nobis?</p>
        <h3>Formas de Pagamento</h3>
        <div class="pagamento">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cash" viewBox="0 0 16 16">
                    <path d="M8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"/>
                    <path d="M0 4a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V4zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V6a2 2 0 0 1-2-2H3z"/>
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-credit-card-fill" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v1H0V4zm0 3v5a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7H0zm3 2h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1z"/>
                </svg>
            </a>
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
            </a>
        </div>
        <div>
            <label for="unidades">Quantidade: </label>
            <input type="number" name="unidades" id="unidades">
            <?php
            echo "<br><br>Número de Unidades Disponíveis: ";
            echo $data['unidades']
            ?>
            <!-- <label for="unidades">Entrega: </label>
            <label for="Delivery">Delivery</label>
            <input  class="chec"type="checkbox" name="Delivery">
            <label for="Retirada">Retirada</label>
            <input class="chec" type="checkbox" name="Retirada"> -->
        </div>
        <br>
        <a href="#" class="button">Comprar</a>
        <a href="#" class="button">Adicionar ao Carrinho</a>
    </form>
</div>

</section>
    
</body>

<script src="../../scripts/mobile-navbar.js"></script>
</html>