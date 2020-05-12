

<!DOCTYPE html>
<html lang="fr" xmlns:og="http://ogp.me/ns#" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta property="og:url" content="https://www.projetjapon.com"> <!--open graph-->
    <meta property="og:title" content="THE artist's">
    <meta property="og:description" content="Venez admierer des travaux plus qu'incroyable de plusieurs artistes">
    <meta property="og:image" content="https://journalmetro.com/wp-content/uploads/2019/11/iStock-1166277130-e1574864225841.jpg?w=860">
    
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- pour empecher le clic droit-->
   
   <meta name="viewport" content="width=device-width, initial-scale=1.0"><!--responsive header-->
    

    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    
    <link rel="icon" type="image/png" href="images/favicon.png" />
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/index.css">
    <title>THE artist's</title>
    <script type="text/javascript">
    //<!--
        document.oncontextmenu = new Function("return false");
    //-->
    </script> <!-- empecher le clic droit-->
</head>
<body>
  



<a id="button"></a>

<?php include'include/header.php';?>

<div class="container">
    <div class="row">
        <div class="quote col-4">
          <span class="left">❝</span>
          <blockquote>
            Dans chaque enfant il y a un artiste. <br>
            Le problème est de savoir comment rester un artiste en grandissant.
          </blockquote>
          <small>Pablo Picasso</small>
          <span class="right">❞</span>
        </div>
        <div class="col-4"></div>
        <div class="col-4"></div>

    </div>
</div>



<script>
    $(document).ready(function() {
  $(".btn").click(function() {
    $(".items").toggleClass("show");
    $("ul li").toggleClass("hide");
  });
        

    var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});


        
        
        
});
    


</script>


</body>
</html>
