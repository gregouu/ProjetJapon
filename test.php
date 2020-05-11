<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Image en BD</title>
</head>
 
<body>

<h3>Envoi d'une image</h3>
<form enctype="multipart/form-data" action="stockage_image.php" method="post">
    <input type="file" name="fic" size=50 />
    <input type="submit" value="Envoyer" />
</form>
<p><a href="voir_image.php?id=1">Voir les images</a></p>


</body>
</html>