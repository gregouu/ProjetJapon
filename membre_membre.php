<?php
session_start ();
;?>


<?php

if(!empty($_FILES)){
    require("imgClass.php");
    
    $img = $_FILES['img'];
    $ext =  strtolower(substr($img['name'], -3));
    $allow_ext = array("jpg", "png", "gif");
    if(in_array($ext, $allow_ext)){
        move_uploaded_file($img['tmp_name'], "images_/".$img['name']);
        Img::creerMin( "images_/".$img['name'], "images_/min",$img['name'],215,112);
//        Img::convertirJPG("images_/".$img['name']);
    }else{
        $erreur = "Votre fichier n'est pas une image.";
    }
    
    
}

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
      
          <h2 class="titre" style="text-align: center;">Ajout de profile</h2>

            <form method="post" enctype="multipart/form-data" action="profil.php">

                 <input class="" multiple type="file" placeholder="Fichiers" name="img"/><br><br>
                 <input class="bouton" type="submit" name="Envoyer"/>

            </form>      
                            <br>

            <form method="post">
                            <br>
                            
                <input type="text"name="photo" class="input" placeholder="Image"><br><br>

                <input type="text"name="nom" class="input" placeholder="Nom"> <br> <br>

                <textarea class="input" name="description" rows="5" cols="33" placeholder="Description">

                </textarea> <br> <br>

                <input class="input" type="text" name="facebook" placeholder="Lien facebook" > <br><br>

                <input class="input" type="text" name="twitter" placeholder="Lien twitter"> <br><br>

                <input class="input" type="text" name="insta" placeholder="Lien insta"> <br><br>

                <button class="bouton" type="submit">Connexion </button>

            </form>   
       </div>    
   
     
    
   <div class="form col-4">
      
      <h2 class="titre" style="text-align: center;">Ajout de profile</h2>
       
        <form method="post" enctype="multipart/form-data" action="profil.php">
                          
             <input class="" multiple type="file" name="img"/><br><br>
             <input class="bouton" type="submit" name="Envoyer"/>
                    
        </form>      
                        <br>
                          
        <form method="post">
                        <br>
                        
            <input type="text" name="photo" class="input" placeholder="Image"><br><br>

            <input type="text" name="nom" class="input" placeholder="Nom"> <br> <br>
                          
            <textarea class="input" name="description" rows="5" cols="33" placeholder="Description">
                          
            </textarea> <br> <br>

            <input class="input" type="text" name="facebook" placeholder="Lien facebook" > <br><br>

            <input class="input" type="text" name="twitter" placeholder="Lien twitter"> <br><br>

            <input class="input" type="text" name="insta" placeholder="Lien insta"> <br><br>
                          
            <button class="bouton" type="submit">Connexion </button>

        </form>   
   </div>           
           
    </div>
</div>
  
         <?php
    
        $pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
         $sql = 'SELECT COUNT(*) AS nb FROM profile'; 
         $result = $pdo->query($sql);
         $columns = $result->fetch(); $nb = $columns['nb']; echo 'Il y a '.$nb.' enregistrements en base.';
    
    ?>
   
   <center>
       <a href="membre_commi_admin.php"><div class="commi">Voir les commissions</div></a>
   </center>   
      <br>
    <center>
       <a href="membre_contact_admin.php"><div class="commi">Voir les messages</div></a>
   </center>   
   <br>
      <center>
       <a href="membre_ToutLesArtistes.php"><div class="commi">Gestion des articles</div></a>
   </center>   
     <br>
      <center>
       <a href="membre_propos_admin.php"><div class="commi">Gestion A Propos</div></a>
   </center>      
      <br>
    <center>
       <a href="galerie_membre.php"><div class="commi">Gestion de la galerie</div></a>
   </center>



<?php
if (isset($_SESSION['login']) && isset($_SESSION['password'])) {

	// On teste pour voir si nos variables ont bien été enregistrées
	echo '<html>';
	echo '<head>';
	echo '<title>Page de notre section membre</title>';
	echo '</head>';

	echo '<body>';
	echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['password'].'.';
	echo '<br />';

	// On affiche un lien pour fermer notre session
	echo '<a href="membre_logout.php">Déconnection</a>';
}
else {
	echo 'Les variables ne sont pas déclarées.';
}
?>




 <?php

    
         // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
 
  if($_POST) {
    // Requêtes SQL pour insérer une nouvelle ligne dans la base de données
    $result = $pdo->prepare('INSERT INTO profile (nom, photo, description, facebook, twitter, insta) VALUES (:nom, :photo, :description, :facebook, :twitter, :insta)');
    // On remplace les éléments préparés par les données envoyées par le formulaire
    $result->execute(array(
          'nom' => $_POST['nom'],
          'photo' => $_POST['photo'],
          'description' => $_POST['description'],
          'facebook' => $_POST['facebook'],
          'twitter' => $_POST['twitter'],
          'insta' => $_POST['insta'],

          
    ));
             if (isset($_FILES['photo']['tmp_name'])) {
            $retour = copy($_FILES['photo']['tmp_name'], $_FILES['photo']['name']);
            if($retour) {
                echo '<p>La photo a bien été envoyée.</p>';
//                echo '<img src="' . $_FILES['photo']['name'] . '">';
            }
        }
  } 
?>



<br><br>


<?php include 'include/footer.php';?>