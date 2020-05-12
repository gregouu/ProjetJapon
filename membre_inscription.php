

<?php 
     // Connexion à la base de données
  $pdo = new PDO('mysql:host=localhost;dbname=zartiste;charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
 
  if($_POST) {
      
    $email = $_POST['login'];
    if (filter_var($email, FILTER_VALIDATE_EMAIL) == true) {
        

        
        $password=$_POST['password'];

        if(strlen($password) < 8 ){
            echo"mot de passe trop court!";
        
        }
        else{
            
            $result = $pdo->prepare('INSERT INTO user (login, password, pseudo) VALUES (:login, :password, :pseudo)');
            // On remplace les éléments préparés par les données envoyées par le formulaire
            $result->execute(array(
                  'login' => $_POST['login'],
                  'password' => $hashed_password = password_hash($_POST['password'], PASSWORD_DEFAULT),
                  'pseudo' => $_POST['pseudo']
            ));
        }   
    } else{
        echo("le mail n'est pas bon");
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
    
    <style>
        .nsp{
            background-image: url(images/1.jpg);
            background-size: cover;
            position: relative;
            opacity: 100%;
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
    <div class="box boxShaddow nsp"></div>
  
    <div class="box forgetbox">
      <a href="#" class="back icon-back">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 199.404 199.404" style="enable-background:new 0 0 199.404 199.404;"
	 xml:space="preserve">
	<polygon points="199.404,81.529 74.742,81.529 127.987,28.285 99.701,0 0,99.702 99.701,199.404 127.987,171.119 74.742,117.876 
		199.404,117.876 "/>
</svg>
      </a>
 
    </div>
    <div class="box registerBox">
      <span class="reg_bg"></span>
      <h2>Inscription</h2>
      <form class="form" method="POST" action="">
        <div class="f_row">
          <label>Mail</label>
          <input type="text" class="input-field" name="login" required>
          <u></u>
        </div>
        <div class="f_row">
          <label>Pseudo</label>
          <input type="text" class="input-field" name="pseudo" required>
          <u></u>
        </div>
        <div class="f_row last">
          <label>Mot de passe</label>
          <input type="password" class="input-field" name="password" required>
          <u></u>
        </div>
        <button class="btn-large" name="valider">Suivant</button>
      </form>
    </div>
    <a href="#" class="regTag icon-add">
      <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 357 357" style="enable-background:new 0 0 357 357;" xml:space="preserve">
<path d="M357,204H204v153h-51V204H0v-51h153V0h51v153h153V204z"/>
</svg>

    </a>
  </div>
</div>







<?php include 'include/footer.php';?>