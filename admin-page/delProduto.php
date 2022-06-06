<?php 

if(!empty($_GET['id'])){

    include_once('../pages/conexão.php');

    $id = $_GET['id'];
    
    $sqlSelect = "SELECT * FROM produtos WHERE id=$id";
    
    
    $result = $conn->query($sqlSelect);
    
    if($result->num_rows > 0){
    
        $sqlDelete = "DELETE FROM produtos WHERE id=$id";
        $resultDelete = $conn->query($sqlDelete);
    } 
}
header('Location: ../pages/sistema.php');
?>