<?php
include_once('conexão.php');
if(!empty($_GET['search'])){

    $data = $_GET['search'];
    $sqlProdutos = "SELECT * FROM produtos WHERE nome LIKE '%$data%' or descrição LIKE '%$data%' ORDER BY id DESC";

} else {
    $sqlProdutos = "SELECT * FROM produtos ORDER BY id DESC";
}

$resultProdutos = $conn->query($sqlProdutos);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="../img/lua-fundo-removido.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/produtos.css">
    <title>Nossos Produtos</title>
</head>
<body>
    
    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <img src="../img/logo sem fundo.png" alt="logo">
                </a>
                <div class="box-search">
                    <input type="search" class="inputbootstrap" placeholder="Nome do produto" id="pesquisar">
                    <button onclick="searchData()" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                    </button>
                </div>
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

    <section class="section">

        <?php while($user_data = mysqli_fetch_assoc($resultProdutos)): ?>
 
        <div class="card">
            <a href="pagina-dinamica.php/?id=<?php echo $user_data['id'];?>" class="venda_produto">
                <div class="imagem">
                    <img src="<?php echo $user_data['imagem']?>" alt="Not found!">
                </div>
                <div class="content">
                    <h4><?php echo $user_data['nome']?><br><?php echo $user_data['descrição']?></h4>
                    <p class="texto"><?php echo $user_data['valor'] ?> R$</p>
                    <a href="pagina-dinamica.php/?id=<?php echo $user_data['id'];?>" class="comprar">Comprar</a>
                </div>
            </a>
        </div>

        <?php endwhile; ?>
       
    </section>

</body>
<script src="../scripts/mobile-navbar.js"></script>
<script>
    var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event){
    if(event.key === "Enter")
    {
        searchData();
    }
});

    function searchData(){
        window.location = 'produtos.php?search='+search.value;
    }
</script>
</html>