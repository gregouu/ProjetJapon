<br><br>

  <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <h6 class="titreFooter">About</h6>
            <p class="text-justify">Tout simplement un jeune développeur qui veut faire ses preuves. Ici, les vrai artistes sont ceux que je vous présente ;)</p>
          </div>

          <div class="col-xs-6 col-md-3">
    
          </div>

          <div class="col-xs-6 col-md-3">
            <h6 class="titreFooter">Quick Links</h6>
            <ul class="footer-links">
              <li><a href="aPropos.php">About</a></li>
              <li><a href="galerie.php">Galerie</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="connexion.php">Connexion</a></li>
              <li><a href="mentionLegal.php" target="_blank">Mention légale</a></li>
            </ul>
          </div>
        </div>
        <hr>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
         <a href="index.php">THE artist's</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>





<script>
    var btn = $('#button');

$(window).scroll(function() {
  if ($(window).scrollTop() > 400) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '400');
});
    
    var inP     =   $('.input-field');

inP.on('blur', function () {
    if (!this.value) {
        $(this).parent('.f_row').removeClass('focus');
    } else {
        $(this).parent('.f_row').addClass('focus');
    }
}).on('focus', function () {
    $(this).parent('.f_row').addClass('focus');
    $('.btn').removeClass('active');
    $('.f_row').removeClass('shake');
});


$('.resetTag').click(function(e){
    e.preventDefault();
    $('.formBox').addClass('level-forget').removeClass('level-reg');
});

$('.back').click(function(e){
    e.preventDefault();
    $('.formBox').removeClass('level-forget').addClass('level-login');
});



$('.regTag').click(function(e){
    e.preventDefault();
    $('.formBox').removeClass('level-reg-revers');
    $('.formBox').toggleClass('level-login').toggleClass('level-reg');
    if(!$('.formBox').hasClass('level-reg')) {
        $('.formBox').addClass('level-reg-revers');
    }
});
$('.btn').each(function() {
     $(this).on('click', function(e){
        e.preventDefault();
        
        var finp =  $(this).parent('form').find('input');
       
       console.log(finp.html());
       
        if (!finp.val() == 0) {
            $(this).addClass('active');
        }
        
        setTimeout(function () {
            
            inP.val('');
            
            $('.f_row').removeClass('shake focus');
            $('.btn').removeClass('active');
            
        }, 2000);
         
        if(inP.val() == 0) {
            inP.parent('.f_row').addClass('shake');
        }
         
        //inP.val('');
        //$('.f_row').removeClass('focus');
        
    });
});


</script>
    
</body>
</html>