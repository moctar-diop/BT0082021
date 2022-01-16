<?php
//include('connect/connect.php');
require_once('header.php');
if(!isset($_SESSION['username'])){
    header('location:LogIn.php');
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        
        <style>
        
/*****  tableau et contenu */


body{
  background-image: url(img/img3.jpg);
}
.container{
  position: relative;
}
.globale{
  position: absolute;
}
.photo{
  text-align: center;
}
.inf{
  text-align: center;
}
.inf h1{ 
 color: red;
}
.inf p{
  border: 2px solid black;
  width: 450px;
  background-color:#ADC1C1;
  text-align: center;
  margin: auto;
}

.link{
  text-align: center;
}

/** Tableau */

table{
    border: 5px solid black;
    margin :25px auto;
    padding: 5px;
    width: 950px;
  background-color: greenyellow;

}

th{
    border: 1px solid black;
    padding-top: 0px;

}

td{
    border: 1px solid black;

}
</style>
    </head>
    <body>
    <div class="container">
  <div class="gloable">
        <div class="title">
            <div class="photo">
                     <img src="https://img.icons8.com/ios-glyphs/30/000000/user--v1.png" width="150px" height="200px"/>

             </div>
        <div class="inf">
                <h1 class="alert-success">Bienvenue <?= $_SESSION['pseudo'] ;?> </h1>

                <p> <br> Voici vos information personnel</p>
        </div>
        </div>
    
    <div class="content" >
  <table>
    <tr>
        <th>Id</th>
        <th>Pseudo</th>
        <th>Prenom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Ville</th>
    </tr>
    <tr>
        <td><?= $_SESSION['id'] ;?></td>
        <td><?= $_SESSION['pseudo'] ;?></td>
        <td><?= $_SESSION['username'] ;?></td>
        <td><?= $_SESSION['nom'] ;?></td>
        <td><?= $_SESSION['email'] ;?></td>
        <td><?= $_SESSION['ville'] ;?></td>
    </tr>
  </table>

  

</div>
<div class="link">
<a href="<?= RACINE_SITE;?>resetPassword.php"><input type="button" value="Changer Mot de passe ?">
           
            </a>
    <a href="<?= RACINE_SITE;?>drop.php"><input type="button" value="Supprimer mon compte" ></a>
</div>
    </div>
    </div>
  </div>
</div>
  
   
    
<?php 
include_once('footer.php');
?>