<div class="nav">
  <div class="left-nav">
    <a href="index.php">
      <div class="logo"></div>
    </a>
    <div class="nav-links">
      <ul>
        <li><a href="patches.php">PATCHES</a></li>
        <li><a href="about.php">ABOUT</a></li>
        <li><a href="news.php">NEWS</a></li>
      </ul>
    </div>
  </div>
  <div class="right-nav">
    <?php if(isset($_SESSION['username'])){
      echo "<div class='auth'>" . $_SESSION['username'] . "</div> | <a href='logout.php' class='auth'>Logout</a>";
    } else {
      echo "<a href='register.php' class='auth'>SignUp</a> | <a href='login.php' class='auth style='margin-right: 1rem'>
      Login </a>";
    } ?>

    <a class="download-link" href="https://store.steampowered.com/app/570/Dota_2/" target="_blank">
      <div class="steam-logo"><img src="" alt="" /></div>
      <div class="steam-text">PLAY FOR FREE</div>
    </a>
  </div>
</div>