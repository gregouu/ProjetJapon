<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Visualisation des images mysql</title>
</head>
 
<body>
<h3>Retour au formulaire</h3>
<a href="test.php">Poster une nouvelle image</a>
<hr/>
<h3>Visualisation de l'image</h3>
<?php
    $projet = $_GET['id'];
?>

<?php echo $projet ?>
<img src="genere_image.php?id=<?php echo $projet ?>" height="150px" width="150px" alt="mon image" title="image"/>
</body>
</html>