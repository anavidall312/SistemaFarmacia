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
                <div class="mobile-menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>
                <ul class="nav-list">
                    <div class="box-search">
                        <input type="search" class="input-bootstrap" placeholder="Nome do produto" id="pesquisar">
                        <button onclick="searchData()" class="btn btn-primary">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                            </svg>
                        </button>
                    </div>
                    <li><a class="a-menu-inicial" href="#">Início</a></li>
                    <li><a class="a-menu" href="pages/login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

<section class="section">
    <div class="card">
        <div class="imagem">
            <img src="../img-produtos/paracetamol.png" alt="...">
        </div>
        <div class="content">
            <h4>Paracetamol 750mg<br>20 Cápsulas</h4>
            <p class="texto" >R$ 60,00</p>
            <a class="comprar" href="#">Comprar</a>
        </div>
    </div>
<!------------------------------------------------------------------------------------->
    <div class="card">
        <div class="imagem">
            <img src="../img-produtos/sabonete dove.png" alt="...">
        </div>
        <div class="content">
            <h4>Sabonete Dove<br>75 Gramas</h4>
            <p class="texto" >R$ 60,00</p>
            <a class="comprar" href="#">Comprar</a>
        </div>
    </div>
<!------------------------------------------------------------------------------------->
<div class="card">
        <div class="imagem">
            <img src="../img-produtos/shampoo.png" alt="...">
        </div>
        <div class="content">
            <h4>shampoo Antiresíduos Universal 1L<br></h4>
            <p class="texto" >R$ 60,00</p>
            <a class="comprar" href="#">Comprar</a>
        </div>
    </div>
    <!------------------------------------------------------------------------------------->
    <div class="card">
        <div class="imagem">
            <img src="../img-produtos/sabonete liquido.png" alt="...">
        </div>
        <div class="content">
            <h5>Sabonete Líquido<br>200ml</h5>
            <p class="texto" >R$ 60,00</p>
            <a class="comprar" href="#">Comprar</a>
        </div>
    </div>
</section>

</body>
<script src="../scripts/mobile-navbar"></script>
</html>