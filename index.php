<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/lua-fundo-removido.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>IDCA Tecnologia</title>
</head>
<body>
    <!-- <img src="img/2.png" alt="logo" width="700px">
    <img src="img/1.png" alt="..." width="700px"> -->

    <header class="header">
        <div class="container">
            <nav class="nav">
                <a href="#" class="logo">
                    <img src="img/logo sem fundo.png" alt="logo">
                </a> 
                <div class="mobile-menu">
                    <div class="linha1"></div>
                    <div class="linha2"></div>
                    <div class="linha3"></div>
                </div>
                <ul class="nav-list">
                    <li><a class="a-menu-inicial" href="#">Início</a></li>
                    <li><a class="a-menu" href="pages/cadastro.php">Cadastro</a></li>
                    <li><a class="a-menu" href="#contato">Contato</a></li>
                    <li><a class="a-menu" href="pages/login.php">Login</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <div class="slider">
        
            <div class="hero">
                <div class="container">
                    <div class="main-heading">
                        <h1 class="title">Farmácia Madre Paulina</h1>
                        <h2 class="subtitle">Quem sai ganhando é você</h2>
                    </div>
                    <!-- <div class="button home_slider_button"><div class="button_bcg"></div><a href="ofertas.php">confira agora<span></span><span></span><span></span></a></div> -->
                    <a href="pages/produtos.php" class="btn btn-gradient">Nossos Produtos</a>
                </div>
            </div>

            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">
                <input type="radio" name="radio-btn" id="radio5">     

                <div class="slide first">
                    <img src="https://guiadafarmacia.com.br/wp-content/uploads/2021/10/Farmacias-ponto-estrategico.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="https://matriculas.estacio.br/blog/wp-content/uploads/2019/04/faculdade-de-farmacia-onde-trabalhar-depois-formado-estacio.jpg" alt="">
                </div>    
                <div class="slide">
                    <img src="https://img.freepik.com/fotos-gratis/homem-e-mulher-escolhendo-medicamentos-nas-farmacias_85574-3135.jpg?w=2000" alt="">
                </div> 
                <div class="slide">
                    <img src="https://hilab.com.br/wp-content/uploads/2018/10/Atrair-clientes-farmacia-Hilab-1149x768.jpg" alt="">
                </div>      
                <div class="slide">
                    <img src="https://caetite.ba.gov.br/site/wp-content/uploads/2021/12/farmacia.jpg" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                    <div class="auto-btn5"></div>
                </div>
            </div>                
        </div>

        <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            <label for="radio4" class="manual-btn"></label>
            <label for="radio5" class="manual-btn"></label>
        </div>                
    
    </main>

<!-----------------------Formulário de Contato------------------------------->

<section>
    <div class="conteudo">
<h2>Mande-nos uma mensagem!</h2>
    <div class="row100">
        <div class="col">
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span class="text">Primeiro Nome</span>
                <span class="line"></span>
            </div>
        </div>
        
        <div class="col">
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span class="text">Último Nome</span>
                <span class="line"></span>
            </div>
        </div>
    </div>

    
    <div class="row100">
        <div class="col">
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span class="text">Email</span>
                <span class="line"></span>
            </div>
        </div>
        
        <div class="col">
            <div class="inputBox">
                <input type="text" name="" required="required">
                <span class="text">Mobile</span>
                <span class="line"></span>
            </div>
        </div>
    </div>

    <div class="row100">
        <div class="col">
            <div class="inputBox textarea">
                <textarea required="required"></textarea>
                <span class="text">Escreva Sua Mensagem Aqui</span>
                <span class="line"></span>
            </div>
        </div>
    </div>

    <div class="row100">
        <div class="col">
            <input type="submit" value="Enviar">
        </div>
    </div>
    </div>   
</section>



<!--------------------------Fim do Formulário------------------------------------>
    <footer>

    <div class="footer">
        Copyright © Direitos reservados a IDCA Tecnologia
    </div>
    </footer>
</body>
<script src="scripts/mobile-navbar.js"></script>
</html>