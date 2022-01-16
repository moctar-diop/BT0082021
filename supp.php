<?php
require_once('connect/connect.php');
if($_SESSION['admin']){


$id= $_GET['idu'];
 $sql = "DELETE FROM users WHERE id=$id";
 //Préparez notre déclaration DELETE
$stmt = $pdo->prepare($sql);

//Exécuter notre instruction DELETE

$res = $stmt->execute();
if($res){
    // fermeture de la connexion
   
    header('location:index.php');
}else{
    echo 'erreur';
}
}else{
    echo"vous devez vous conneecter en tant qu'admin";
    header('Refresh:2;url="index.php"');
}
?>