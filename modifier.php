<?php

require_once('connect/connect.php');

$id= $_GET['idu'];
$pseudo=$_POST['pseudo'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$ville=$_POST['ville'];

if($_POST){
    $sql= "UPDATE users SET pseudo='$pseudo',nom='$nom',prenom='$prenom',email='$email',ville='$ville' WHERE id=$id";
    $stmt = $pdo->prepare($sql);

//Exécuter notre instruction DELETE

$res = $stmt->execute();
if($res){
    // fermeture de la connexion
   
    header('location:index.php');
}else{
    echo 'erreur';
}

}
/*  $sql = "DELETE FROM users WHERE id=$id";
 //Préparez notre déclaration DELETE

 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div  id="contain">
                <form name="inscription" class="form" action="#" method="post" onsubmit="return signin()">

                    <h1>Creation de compte de  gestion utilisateur</h1>
                    <label for="pseudo">Pseudo</label><br>
                     <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo"required="required" value="">
                    <label for=""> Nom :</label>
                    <input type="text" name="nom" id="nom"> <br><br>
                    <label for=""> prenom :</label>
                    <input type="text" name="prenom" id="prenom"> <br><br>
                    <label for="">Email :</label>
                    <input type="text" name="email" id="email"> <br><br>
                     <label for="ville">Ville</label><br>
                    <input type="text" id="ville" name="ville" placeholder="votre ville" "><br><br> 
                    <input type="submit" value="mettre a jour">
                </form> 
            
        </div>
</body>
</html>