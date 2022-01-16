<?php 
//require('header.php');
require_once('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
  
</head>
<body class="body2">
  
   <div  id="contain">
                <form name="inscription" class="form" action="fichier/signin.php" method="post" onsubmit="return signin()">

                    <h1>Creation de compte de  gestion utilisateur</h1>
                    <label for="pseudo">Pseudo</label><br>
                     <input type="text" id="pseudo" name="pseudo" maxlength="20" placeholder="votre pseudo"required="required">
                    <label for=""> Nom :</label>
                    <input type="text" name="nom" id="nom"> <br><br>
                    <label for=""> prenom :</label>
                    <input type="text" name="prenom" id="prenom"> <br><br>
                    <label for="">Email :</label>
                    <input type="text" name="email" id="email"> <br><br>
                    <label for="">Mot de Passe :</label>
                    <input type="password" name="passwords" id="password"> <br><br>
                     <label for="ville">Ville</label><br>
                    <input type="text" id="ville" name="ville" placeholder="votre ville" "><br><br> 
                    <input type="submit" value="S'inscrire">
                    <h3>Vous avez deja un compte ?</h3>
                    <a href="LogIn.php"><input type="button" value="Se connecter"></a>
                </form> 
            
        </div>
    <script>
        // verification du validation du formulaire
        function signin(){
            var pseudo = document.forms['inscription']['pseudo'];
            var nom = document.forms['inscription']['nom'];
            var prenom = document.forms['inscription']['prenom'];
            var email = document.forms['inscription']['email'];
            var passwords = document.forms['inscription']['passwords'];
            var password_confirm = document.forms['inscription']['password_confirm'];
            var ville = document.forms['inscription']['ville'];
            
            if(pseudo.value == ""){
                alert("Mettez votre pseudo");
                pseudo.focus();
                return false;
            }
            if(nom.value == ""){
                alert("Mettez votre nom");
                nom.focus();
                return false;
            }
            if(prenom.value == ""){
                alert("Mettez votre prenom");
                prenom.focus();
                return false;
            }
            if(email.value == ""){
                alert("Mettez votre email");
                email.focus();
                return false;
            }
            if(passwords.value == ""){
                alert("Mettez votre mot de passe");
                passwords.focus();
                return false;
            }
            if(password_confirm.value == ""){
                alert("confirmer votre mot de passe");
                password_confirm.focus();
                return false;
            }
            if(ville.value == ""){
                alert("Mettez votre ville");
                ville.focus();
                return false;
            }
            return true
        }
        signin();
    </script>
   <!--  <footer>
        <p>footer</p>
        <p><a href="#">deconnection</a></p>
    </footer> -->
</body>
</html>