<?php
session_start ();
;?>




<!DOCTYPE html>
<html lang="fr" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta property="og:url" content="https://www.projetjapon.com"> <!--opne graph-->
    <meta property="og:title" content="THE artist's">
    <meta property="og:description" content="Venez admierer des travaux plus qu'incroyable de plusieurs artistes">
    <meta property="og:image" content="https://journalmetro.com/wp-content/uploads/2019/11/iStock-1166277130-e1574864225841.jpg?w=860">
    
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- pour empecher le clic droit-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <script src="https://kit.fontawesome.com/a076d05399.js"></script><!--la loupe-->
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <link rel="icon" type="image/png" href="images/favicon.png" />
    
    <script src="https://kit.fontawesome.com/ebfafc2eb8.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/artistes.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/admin.css">
    
    
    <style>
        .form{
            position: relative;
            width: 320px;
            margin: 70px auto;
            padding: 20px;
            border-radius: 20px;
            border: solid black 1px;
            background: white;
            
}
        .input{
            border-top: none;
            border-left: none;
            border-right: none;
            border-bottom: solid black 1px;
        }
        
        .bouton{
            border-radius: 15px;
            box-shadow: 2px 2px 2px black;
            opacity: 0.8;
        }

    </style>
    
    
   <title>THE artist's</title>
    <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script> <!-- empecher le clic droit-->
</head>
<body>
  

<a id="button"></a>

<?php include 'include/header_membre.php';?>

<?php 
    if(isset($erreur)){
        echo $erreur;
    }
  ;?>

<div class="container">
    <div class="row">
        
         <div class="form col-4">
      
          <h2 class="titre" style="text-align: center;">Gestion A Propos</h2>

            <form method="post">
                            <br>
                            
                <input type="text"name="photo" class="input" placeholder="Image"><br><br>
                
                <input type="text"name="titre" class="input" placeholder="Titre"><br><br>

                <textarea class="input" name="message" rows="5" cols="33" placeholder="Description">

                </textarea> <br> <br>

                <button class="bouton" type="submit">Ecrire About</button>

            </form>   
       </div>            
           
    </div>
</div>
   
 <?php

    
         // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
 
  if($_POST) {
    // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
    $result = $pdo->prepare('INSERT INTO about (photo, message, titre) VALUES (:photo, :message, :titre)');
    // On remplace les éléments préparés par les données envoyées par le formulaire
    $result->execute(array(
          'photo' => $_POST['photo'],
          'message' => $_POST['message'],
          'titre' => $_POST['titre'],

          
    )); }?>



<br><br>


<?php include 'include/footer.php';?>