<?php
try
{
    /* on définie les options de la connexion */
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); 

    /* on prépare la requête avec des marqueurs */
 
    $reponse = $bdd->prepare('SELECT img_id, img_type, img_blob FROM images WHERE img_id =:id');
    $reponse->bindValue('id',$_GET['id'],PDO::PARAM_INT);
    $reponse->execute();
    $donnees = $reponse->fetch();
    /* on ferme la connexion */
    $reponse->closeCursor();
}
catch(EXCEPTION $e)
{  
    /* on affiche les erreur éventuelles en développement */
    die('Erreur : '.$e->getMessage());
}
header('Content-Type: image');
echo $donnees['img_blob'];
?>




