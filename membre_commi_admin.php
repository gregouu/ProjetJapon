
<?php
session_start ();
;?>


<?php // Connexion à la base de données
$pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); ?>


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
    <link rel="stylesheet" href="css/commi_admin.css">
    
    
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


    <div class="container">
        <div class="row">
    
 <?php 
    // Requêtes SQL pour récupérer toutes les lignes d'une table de la base de données
    $result = $pdo->query("SELECT * FROM commission");
    // Boucle pour lister les résultats de la requête précédente
    while($profil = $result->fetch(PDO::FETCH_ASSOC)){ ?>
    
        Nom et Prénom: <?php echo $profil["nom"]; ?><br>
        Taille: <?php echo $profil["taille"]; ?><br>
        Mail: <?php echo $profil["mail"]; ?><br>
        Budget: <?php echo $profil["budget"]; ?><br>
        Type: <?php echo $profil["art"]; ?><br>
        Description: <?php echo $profil["descriptif"]; ?><br>


 <br><br>
      
<?php } ?>


        </div>
    </div>

<br><br>

<?php include 'include/footer.php';?>

