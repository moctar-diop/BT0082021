<?php 
include('connect/connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto&family=Source+Code+Pro:wght@400;500&display=swap" rel="stylesheet">
    <style>
      *{
        font-family: 'Roboto', sans-serif;
font-family: 'Source Code Pro', monospace;

}
  .header {
  overflow: hidden;
  background-color: #24262b;
  padding: 20px 10px;
}

/* Style the header links */
.header a {
  float: left;
  color: #F6F8FC;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #ddd;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}


.header-right {
  float: right;
}
 /** Responsive screen */
@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
    </style>
</head>
<body>
  
<div class="header">
<a href="<?= RACINE_SITE;?>index.php"  class="logo">Home</a>
  <div class="header-right">
  <a href="<?= RACINE_SITE;?>SignIn.php">inscription</a>
  <a href="<?= RACINE_SITE;?>profil.php">voir mon profil</a>
  <a href="<?= RACINE_SITE;?>logout.php">Deconnection</a></li>
  <a href="<?= RACINE_SITE;?>logIn.php">Connection</a></li>

  </div>
</div>
 
   
        
    
