<?php

session_start();

if(!empty($_POST['email']) && !empty($_POST['senha'])){


      include_once('conexão.php');
      $email = $_POST['email'];
      $senha = $_POST['senha'];


$sql = "SELECT * FROM admin WHERE email = '$email' and senha = '$senha'";

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