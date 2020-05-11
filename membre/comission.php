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
    
    <link rel="icon" type="image/png" href="../images/favicon.png" />
    
    <script src="https://kit.fontawesome.com/ebfafc2eb8.js" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/commission.css">
    <link rel="stylesheet" href="../css/footer.css">
    
   <title>THE artist's</title>
    <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script> <!-- empecher le clic droit-->
</head>
<body>
  

    <a id="button"></a>

    <?php include '../include/header_membre.php';?>
    
    <div class="commi">
        <h2>Formulaire de commission</h2>
    <form action="" method="post">
    <div>
        Votre nom et prénom:
        <input type="text" class="personal" name="nom" placeholder="Nom et Prénom">
        
        <div>Entrer votre mail:
            <input type="text" class="personal" name="mail" placeholder="Votre email">
        </div>
        
        <div>
            Taille de la(es) commssion(s):
            <input type="text" name="taille" placeholder="En pixels/cm/in.">
        </div>
        
        <div>
            Budget:
            <input type="number" name="budget" placeholder="€Euro">
        </div>
        
        
             Le type de commission?<br>
            <input type="radio" name="art" value="trad"> Traditionel<br>
            <input type="radio" name="art" value="digi"> Digital<br>
            <input type="radio" name="art" value="autre"> Autre
        
        
        <div>
            Détail de la commission:
            <textarea type="text" class=details name="descriptif" placeholder="Une description de votre commission. Merci de préciser le nom de l'artiste qui réalisera votre commission, sous peine de ne pas avoir de réponse!"></textarea>
        </div>
        
    <br>
       
        <div class="buttons">
            <button type="submit" class="enter" name="valider">Envoyer</button>
        </div>
    
        
    </div> 
    </form>
    </div>

 <?php

    
         // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
 
  if($_POST) {
    // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
    $result = $pdo->prepare('INSERT INTO commission (nom, mail, taille, budget, art, descriptif) VALUES (:nom, :mail, :taille, :budget, :art, :descriptif)');
    // On remplace les éléments préparés par les données envoyées par le formulaire
    $result->execute(array(
          'nom' => $_POST['nom'],
          'mail' => $_POST['mail'],
          'taille' => $_POST['taille'],
          'budget' => $_POST['budget'],
          'art' => $_POST['art'],
          'descriptif' => $_POST['descriptif'],

          
    )); ?>
         
         
      <?php    
         
       if (isset($_POST["valider"])){
							echo "Votre commission à bien été enregistré";
						}  
         ?>
            <?php } ?>
     
  


   
   <br>
   <br>
   <br>
  
   
   
   

<?php include '../include/footer.php';?>