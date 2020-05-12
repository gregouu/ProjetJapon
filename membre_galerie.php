<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   
      
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