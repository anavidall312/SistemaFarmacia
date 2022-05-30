<?php
session_start();
include_once('conexão.php');

if((!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true))){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];
if(!empty($_GET['search'])){

    $data = $_GET['search'];
    $sql = "SELECT * FROM usuario WHERE nome LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";

} else {
    $sql = "SELECT * FROM usuario ORDER BY id DESC";
}

$result = $conn->query($sql);
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../img/lua-fundo-removido.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sistema de Usuários</title>

    <style>
        *{
        margin: 0;
        padding: 0;
        }
        body{
            overflow-x: hidden;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color:white;
            text-align: center;
        }
        .nav{
            
            display: flex;
            width: 100vw;
            height: 9vh;
            background: rgb(32, 155, 220);
            justify-content: space-between;
        }
        .navbar{
            position: absolute;
            top: 6px;
            right: 8px;
            text-align: center;
            text-decoration: none;
            color: white;
            font-size: 25px;
        }
        .navbar:hover{
            text-decoration: underline;
            position: absolute;
            top: 6px;
            right: 8px;
            text-align: center;
            color: white;
            font-size: 25px;
        }
        .saindo{
            position: absolute;
            left: 8px;
            text-decoration: none;
            color: white;
            padding: 6px;
            background: red;
            border-radius: 8px;
            font-size: 20px;
            margin: 16px;
        }
        .saindo:hover{
            position: absolute;
            left: 8px;
            text-decoration: none;
            color: white;
            padding: 6px;
            background: red;
            border-radius: 8px;
            font-size: 20px;
        }
        .box-search{
            display: flex;
            justify-content: center;
            gap: .1%;
        }
    </style>
</head>
<body>
    <nav class="nav">
        <div class="container">
            <a href="#" class="navbar">Dados do banco de dados</a>
        </div>
        <div class="sair">
            <a href="sair.php" class="saindo">Sair</a>
        </div>
    </nav>
    <br>
    <?php 
echo "<h1>Bem vindo $logado</h1>";
    ?>
    <br>
    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="m-5">
        <table class="table text-white">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Email</th>
                    <th>Senha</th>
                    <th>Cpf</th>
                    <th>Rg</th>
                    <th>Telefone</th>
                    <th>...</th>
                </tr>
            </thead>
            <tbody>
                <?php

while($user_data = mysqli_fetch_assoc($result)){
    echo "<tr>";
    echo "<td>".$user_data['id']."</td>";
    echo "<td>".$user_data['nome']."</td>";
    echo "<td>".$user_data['email']."</td>";
    echo "<td>".$user_data['senha']."</td>";
    echo "<td>".$user_data['cpf']."</td>";
    echo "<td>".$user_data['rg']."</td>";
    echo "<td>".$user_data['telefone']."</td>";
    echo "<td>
    <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
        </svg>
    </a>
    <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
  </svg>

    </a>
    </td>";
    echo "</tr>";
}

?>
            </tbody>
        </table>
    </div>



    
</body>
<script>
    var search = document.getElementById('pesquisar');

search.addEventListener("keydown", function(event){
    if(event.key === "Enter")
    {
        searchData();
    }
});

    function searchData(){
        window.location = 'sistema.php?search='+search.value;
    }
</script>
</html>


<!--

Gustavo Neitzze 
02/10/2021
https://www.youtube.com/watch?v=r5aYk7rjRP0&list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK&index=6

-->