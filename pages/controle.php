<?php
/*
require('conexão.php');

$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$database = "farmacia";
$servername = "localhost";
$username = "root";
$password = "";


$stmt = $conn->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $nome, $email, $senha);

$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
*/


/*
require('conexão.php');

$consulta = "SELECT * FROM usuario";
$con = $mysql->query($consulta) or die($mysql->error);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<table>
      <tr>
            <td>Email</td>
            <td>Nome</td>
            <td>Senha</td>
            <td>Id</td>
            <td>Cpf</td>
            <td>Rg</td>
            <td>Sexo</td>
      </tr>
      <?php while($dados = $con->fetch_array()){ ?>
      <tr>
            <td><?php echo dados["email"]; ?></td>
            <td><?php echo dados["nome"]; ?></td>
            <td><?php echo dados["senha"]; ?></td>
            <td><?php echo dados["id"]; ?></td>
            <td><?php echo dados["cpf"]; ?></td>
            <td><?php echo dados["rg"]; ?></td>
            <td><?php echo dados["sexo"]; ?></td>
      </tr>
      <?php } ?>
</table>
      
</body>
</html>
*/

session_start();

if(!empty($_POST['email']) && !empty($_POST['senha'])){


      include_once('conexão.php');
      $email = $_POST['email'];
      $senha = $_POST['senha'];


$sql = "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'";

$result = $conn->query($sql);

if(mysqli_num_rows($result) < 1){
      unset($_SESSION['email']);
      unset($_SESSION['senha']);
      header('Location: login.php');
}
else{
      $_SESSION['email'] = $email;
      $_SESSION['senha'] = $senha;
      header('Location: sistema.php');
}
}
else{
      header('Location: login.php');
}




?>