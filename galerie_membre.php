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


<div class="container">
    <div class="row">
        
         <div class="form col-4">
      
           <?php 
    if(isset($erreur)){
        echo $erreur;
    }
  ;?>
   <form method="post" action="" enctype="multipart/form-data">
       <input type="file" name="img"/>
       <input type="submit" name="Envoyer"/>
   </form>  
       </div>            
           
    </div>
</div>




<br><br>


<?php include 'include/footer.php';?>