<?php
  session_start();
?>
<?php
  include "includes/connection.php";
  $loginError = "";

  if(isset($_POST['submit-btn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    // code to authenticates the user
    $sql = "SELECT * FROM users WHERE username = '$username' AND BINARY password = '$password'";
    $result = mysqli_query($connection, $sql);
    $row = mysqli_fetch_assoc($result);
    $count = mysqli_num_rows($result);

    // alert count
    if($count == 1){
      $_SESSION['username'] = $username;
      $_SESSION['password'] = $password;
      header("Location: index.php");
    }else{
      $loginError = "Incorrect username or password";
    }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://kit.fontawesome.com/538af86eaa.js" crossorigin="anonymous"></script>
  <title>Dota 2 | Login</title>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Castoro&family=Noto+Sans+JP&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="css/main.css" />
  <script src="scripts/main.js" defer></script>
  <script src="scripts/login.js" defer></script>
</head>

<body style="background: url('./images/bg.jpg') center center / cover no-repeat">
  <header id="login-header" style="margin-bottom: 0">
    <div class="head-container">
      <?php
        include 'includes/header.php';
        include "includes/connection.php";
      ?>
    </div>
  </header>

  <!-- Section A: Contact form -->
  <section id="login">
    <div id="login-content">
      <div class="container">
        <h2 class="title-text">Login To Steam</h2>
        <div class="login-elements">
          <!-- Form -->
          <form class="myForm" action="" method="POST">
            <div class="error">
              <?php 
                if(isset($loginError)){
                  echo $loginError;
                }
              ?>
            </div>
            <div class="field">
              <label for="username">Username<span>*</span></label>
              <input type="text" name="username" class="input" placeholder="Username" id="username" value="<?php if(isset($_POST['username'])){
                echo $_POST['username'];
              } ?>" />
            </div>

            <div class="field">
              <label for="password">Password<span>*</span></label>
              <input type="password" name="password" class="text-input phone-input" placeholder="Password" id="password"
                value="<?php if(isset($_POST['password'])){
                  echo $_POST['password'];
                } ?>" />
            </div>

            <button id="submit-btn" name="submit-btn" type="submit" class="btn">Register</button>
          </form>
          <div class="login-pic">
            <img src="images/about/sf.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php
  include "includes/scrollToTop.php";
  include 'includes/footer.php';
  ?>
</body>

</html>