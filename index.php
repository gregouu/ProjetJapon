<?php include 'include/head.php';?>

<section class="grid-container">
  <div class="grid-x align-center">
    <div class="cell card medium-4">
      <header>
        <img src="images/totoro.jpg" alt="" class="header-img" />
        
        <div class="avatar">
           <img src="https://s.cdpn.io/profiles/user/275599/512.jpg?1584696436" alt="" />
        </div>
      </header>
      
      <div class="card-section">
        <h4 class="username">lukeandrewreid</h4>
      </div>
      
      <footer>
        <ul>
          <li>
            <a href="#">
              <i class="fa fa-twitter"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-linkedin"></i>
            </a>
          </li>
          <li>
            <a href="#">
              <i class="fa fa-envelope"></i>
            </a>
          </li>
        </ul>
      </footer>
    </div>
  </div>
</section>

<script>
    $(document).ready(function() {
  $(".btn").click(function() {
    $(".items").toggleClass("show");
    $("ul li").toggleClass("hide");
  });
});
</script>
</body>
</html>