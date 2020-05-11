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
    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/footer.css">
    
   <title>THE artist's</title>
    <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
        
//	function verif() {
//		if (document.getElementById("txt_email").value=="") {
//			alert("Tapez un email valable pour avoir une réponse.");
//			document.getElementById("txt_email").focus();
//			return false;
//		}
//		if (document.getElementById("txt_message").value=="") {
//			alert("Pensez à taper un message !");
//			document.getElementById("txt_message").focus();
//			return false;
//		}
//	}
    //-->
    </script> <!-- empecher le clic droit-->
</head>
<body>
  

<a id="button"></a>

<?php include 'include/header.php';?>
           
           
    <div>
            <div class="container">
                <div class="contact-parent">
                    <div class="contact-child child1">
                        <p>
                            <i class="fas fa-map-marker-alt"></i> Adresse <br />
                            <span> Pantin
                                <br />
                                France, FR
                            </span>
                        </p>

                        <p>
                            <i class="fas fa-phone-alt"></i> Téléphone <br />
                            <span> 0781890092</span>
                        </p>

                        <p>
                            <i class=" far fa-envelope"></i> Mail <br />
                            <span>contact@gregorydjerradine.com</span>
                        </p>
                    </div>

                    <div class="contact-child child2">
                        <div class="inside-contact">
                            <h2>Contact Nous</h2>
                            <h3>
                               <span id="confirm"/>
                            </h3>
                    <form action="" method="post" onsubmit="return verif()">
                           
                            <p>Nom *</p>
                            <input id="txt_name"  type="text"  Required="required" name="nom">

                            <p>Email *</p>
                            <input id="txt_email" type="text" Required="required" name="mail">

                            <p>Téléphone *</p>
                            <input id="txt_phone" type="text" Required="required" name="tel">

                            <p>Sujet *</p>
                            <input id="txt_subject" type="text" Required="required" name="sujet">

                            <p>Message *</p>
                            <textarea id="txt_message"  rows="4" cols="20" Required="required"  name="message"></textarea>
                            
                            <input type="submit" id="btn_send" value="ENVOYER" name="valider">
                    </form>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        


        
<?php include 'include/footer.php';?>