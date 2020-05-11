<?php
/* connexion mysql */
try
{
    /* on définie les options de la connexion */
//    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    /* on réalise la connexion */
    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)); 
    /* on prépare la requête avec des marqueurs */
    $reponse = $bdd->prepare('insert into images(img_nom, img_taille, img_type, img_blob) value(:img_nom,:img_taille,:img_type,:img_blob)');
    /* on affecte les marqueurs en exécutant la requête (pas besoin de réafecter une valeur $_POST['champ'] elle peut être utilisé directement) */
    $reponse->execute(array('img_nom' => $_FILES['fic']['name'],'img_taille' => $_FILES['fic']['size'],'img_type' => $_FILES['fic']['type'],'img_blob' => file_get_contents($_FILES['fic']['tmp_name'])));
    /* on ferme la connexion */
    $reponse->closeCursor();
}
catch(EXCEPTION $e)
{
    /* on affiche les erreur éventuelles en développement */
    die('Erreur : '.$e->getMessage());
}
if($reponse==TRUE)
{
    header('location:test.php');
}
else
{
    echo 'Erreur d\'upload';
}
?>