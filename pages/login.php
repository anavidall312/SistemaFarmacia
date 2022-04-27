<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="shortcut icon" href="../img/Logo.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/login.css">
    <title>Login</title>
</head>
<body>
    <div class="alinhamento">
    <form method="POST" action="controle.php">
        
<h1>Insira seus dados</h1>
<input class="input" type="text" placeholder="Email"><br>
<input class="input" type="password" placeholder="Senha" id="pass">
<img src="https://cdn0.iconfinder.com/data/icons/ui-icons-pack/100/ui-icon-pack-14-512.png" id="olho" class="olho"><br>
<input nome="robo" type="checkbox"> 
<label for="robo">Não sou um robô</label><br><br>
<a href="cadastro.php" class="cadastro">Cadastre-se</a>
<input type="submit" value="Enviar">

</form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="../scripts/olho.js"></script>
</body>
</html>