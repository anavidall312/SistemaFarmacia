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


<section class="section">
<div class="card">
    <img src="../<?php echo $data['imagem']?>" alt="...">
    <h1 class="valor">R$ <?php echo $data['valor'] ?></h1>
</div>


</section>
    
</body>
</html>