<?php
session_start();
include_once('conexão.php');

if((!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true))){
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}
$logado = $_SESSION['email'];

$sql = "SELECT * FROM usuario ORDER BY id DESC";

$result = $conn->query($sql);



?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/Logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Sistema</title>

    <style>
        *{
    margin: 0;
    padding: 0;
        }
        body{
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            color:white;
            text-align: center;
        }
        .nav{
            
            display: flex;
            width: 100vw;
            height: 5vh;
            background: rgb(32, 155, 220);
            justify-content: space-between;
        }
        .navbar{
            position: absolute;
            top: -6px;
            right: 8px;
            text-align: center;
            text-decoration: none;
            color: white;
            font-size: 25px;
        }
        .navbar:hover{
            position: absolute;
            top: -6px;
            right: 8px;
            text-align: center;
            text-decoration: none;
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
                    <th>Sexo</th>
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
    echo "<td>".$user_data['sexo']."</td>";
    echo "<td>
    <a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]'>
        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
        <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
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
</html>


<!--

Gustavo Neitzze 
02/10/2021
https://www.youtube.com/watch?v=r5aYk7rjRP0&list=PLSHNk_yA5fNjoIRNHV-3FprsN3NWPcnnK&index=6

-->