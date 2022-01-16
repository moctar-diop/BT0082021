<?php
require_once("connect/connect.php");
//Liez la variable $id au paramètre :id
$id= $_SESSION['id'];
//Le nom que nous souhaitons supprimer de notre table 'users'
$sql = "DELETE FROM `users` WHERE id =$id";

//Préparez notre déclaration DELETE
$stmt = $pdo->prepare($sql);

//Exécuter notre instruction DELETE

$res = $stmt->execute();
if($res){
    // fermeture de la connexion
   
    header('location:LogIn.php');
}else{
    echo 'erreur';
}

die();
?>