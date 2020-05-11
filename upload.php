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
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
 <?php 
    if(isset($erreur)){
        echo $erreur;
    }
  ;?>
   <form method="post" action="upload.php" enctype="multipart/form-data">
       <input type="file" name="img"/>
       <input type="submit" name="Envoyer"/>
   </form>  
   
     <?php 
    $dos = "images_/min";
    $dir = opendir($dos);
    while($files = readdir($dir)){
        $allow_ext = array("jpg", "png", "gif");
        $ext =  strtolower(substr($files, -3));
        if(in_array($ext, $allow_ext)){
            ?>
                <img src="images_/min/<?php echo $files; ?>" />
                
            <?php   
        }
    }
    ;?>
       
           
</body>
</html>