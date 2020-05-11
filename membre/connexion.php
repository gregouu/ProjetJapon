
        
        
        
                  <?php
    $pdo = new PDO('mysql:host=localhost;dbname=zartiste', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));

    if($_POST) {
      $result = $pdo->prepare('SELECT * FROM user WHERE login = :login');
      $result->execute(array(
            'login' => $_POST['login']
      ));
      $users = $result->fetchAll();

  
// on teste si nos variables sont définies
if (empty($users)) {
    
    echo "Login ou mot de passe éronné";
}else{
    
     $connected_user = false;

        foreach ($users as $user) {
          // Si le MDP de la BDD vaut le MDP du formulaire
          if(password_verify($_POST['password'], $user['password'])) {
            // On rentre ici si un login et un MDP correspondent
            $_SESSION['user'] = $user;
            // On récupére le pseudo de l'utilisateur
            $connected_user = $user['pseudo'];
          }
        }
    // on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	if ( $connected_user) {
		// dans ce cas, tout est ok, on peut démarrer notre session

		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['password'] = $_POST['password'];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: membre.php');
	}
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'Membre non reconnu...\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}

}
	

    }
    ?>
        




  



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
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>   

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/connexion.css">
    <link rel="stylesheet" href="css/footer.css">
    
   <title>THE artist's</title>
    <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
        
        
    //-->
    </script> <!-- empecher le clic droit-->
</head>
<body>
  

<a id="button"></a>

    
    

<nav>
  <ul>
    <li class="logo"><figure><img src="images/logo.png" alt="Logo du site"></figure></li>
        <li class="BarreDeRecherche">
        <div class="searchbox">
            <form method="get">
                <input type="text" placeholder="search" id="search" name="search"class="search">
                <i class="fas fa-search"></i>
            </form>
        </div>
   </li>
    <li class="items"><a href="index.php">Accueil</a></li>
    <li class="items"><a href="about.php">About</a></li>
    <li class="items"><a href="artistes.php">Artistes</a></li>
    <li class="items"><a href="contact.php">Contact</a></li>
    <li class="items"><a href="connexion.php">Connexion</a></li>
    <li class="btn"><a href="#"><i class="fas fa-bars"></i></a></li>
  </ul>
</nav>





   <div class="container">
      <div class="formBox level-login">
            <div class="box boxShaddow"></div>
            <div class="box loginBox">
                  <h2>CONNEXION</h2>
                  <form class="form" method="POST" action=" ">
                        <div class="f_row">
                          <label>Mail</label>
                          <input type="text" class="input-field" name="login" required>
                          <u></u>
                        </div>
                        <div class="f_row last">
                          <label>Mot de passe</label>
                          <input type="password" class="input-field" name="password" password required>
                          <u></u>
                        </div>
                        <button  type="submit"><span>Connexion</span><u></u>


                        </button>

                <br>
                        <a href="inscription.php">Pas encore inscrit ?</a>










                  </form>
            </div>
   
  </div>
</div>






<?php include 'include/footer.php';?>