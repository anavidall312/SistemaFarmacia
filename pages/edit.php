<?php

/*if($_SERVER["REQUEST_METHOD"] == "POST") {
*/
    if(!empty($_GET['id'])){
    include_once('conexão.php');

$id = $_GET['id'];

$sqlSelect = "SELECT * FROM usuario WHERE id=$id";


$result = $conn->query($sqlSelect);

if($result->num_rows > 0){

    while($user_data = mysqli_fetch_assoc($result)){
    $nome = $user_data["nome"];
    $email = $user_data["email"];
    $senha = $user_data["senha"];
    $cpf = $user_data["cpf"];
    $rg = $user_data["rg"];
    $telefone = $user_data["telefone"];
    }


} else {
    header('Location: sistema.php');
}

    




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
                    <li><a class="a-menu" href="sistema.php">Voltar</a></li>
                </ul>
            </nav>
        </div>
    </header>




    <div class="alinhamento">
        <form method="POST" action="saveEdit.php">
            
            <h1>Insira seus dados</h1>
            <div class="eye">
                <input class="input" type="text" id="nome" name="nome" value="<?php echo $nome ?>" placeholder="Nome completo" required>
            </div>
            <div class="eye">
                <input class="input" type="email" id="email" name="email" value="<?php echo $email ?>" placeholder="Email" required>
            </div>
            <div class="eye">
                <input class="input" type="text" id="senha" name="senha" value="<?php echo $senha ?>" placeholder="Senha" id="pass" required>
                    <i>
                        <img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho">
                    </i>
            </div>


            <div class="eye">
                <input class="input" type="text" name="cpf" id="cpf" maxlength="14" value="<?php echo $cpf ?>" required>
                <label for="cpf">Cpf</label>
            </div>
            <div class="eye">
                <input class="input" type="text" name="rg" id="rg" maxlength="14" value="<?php echo $rg ?>" required>
                <label for="rg">Rg</label>
            </div>
            <div class="eye">
                <input class="input" type="text" name="telefone" id="telefone" maxlength="16" value="<?php echo $telefone ?>" required>
                <label for="telefone">Telefone</label>
            </div>
            <!-- <div class="eye">
                <input class="input" type="text" name="contato" id="contato" placeholder="Contato">
            </div>
            <div class="eye">
                <input class="input" type="text" name="telefone" id="telefone" placeholder="Tel. (88) 99999-9999" maxlength="15">
            </div>
            <input name="robo" type="checkbox"> 
            <label for="robo" style="color:white;">Não sou um robô</label> -->
            <br><br> 
            <input type="hidden" name="id" value="<?php echo $id?>">
            <input type="submit" name="update" id="update" value="Alterar">

    </form>
</div> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../scripts/olho.js"></script>
<script src="../scripts/telefone.js"></script>
</body>
</html>