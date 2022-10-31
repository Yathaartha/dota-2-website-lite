<?php
  session_start();
  ob_start();
?>
<?php
  include "includes/connection.php";

  $usernameFlag = false;
  $emailFlag = false;
  $passwordFlag = false;
  $fullNameError = "";
  $usernameError = "";
  $emailError = "";
  $phoneError = "";
  $passwordError = "";
  $ageError = "";
  $termsError = "";


  if(isset($_POST['submit-btn'])){
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $age = $_POST['age'];

    if(isset($_POST['terms'])){
      $terms = $_POST['terms'];
    }
    else{
      $terms = "";
    }
  
    $query = "insert into USERS values (null, '$fullname', '$username', '$email', '$phone', '$password', '$age');";
    
    // check if the fullname is empty
    if(empty($fullname)){
      $fullNameError = "Please enter your full name.<br />";
    }else{
      if(strlen($fullname) >= 6){
        $fullname = mysqli_real_escape_string($connection, $fullname);
        $fullNameError = "";
      }else{
        $fullNameError = "Name must be at least 6 characters long. You entered '" . $fullname . "'.<br />";
      }
    }

    if(empty($username)){
      // check if the email is empty or not
      $usernameError = "Please enter your username.<br />";
      $usernameFlag = true;
    }else{
      $usernameFlag = false;
      $username = mysqli_real_escape_string($connection, $username);
      $usernameError = "";
    }

    if(empty($email)){
      // check if the password is empty or not
      $emailError = "Please enter your email.<br />";
    }else{
      // check if email is a valid email
      if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email = mysqli_real_escape_string($connection, $email);
        $emailError = "";
        $emailFlag = false;
      }else{
        $emailFlag = true;
        $emailError = "Please enter a valid email. You entered '" . $email . "'.<br />";
      }
    }

    if(empty($phone)){
      // check if the password is empty or not
      $phoneError = "Please enter your phone.<br />";
    }else{
      $phone = mysqli_real_escape_string($connection, $phone);
      $phoneError = "";
    }

    if(empty($password)){
      // check if the age is empty or not
      $passwordError = "Please enter your password.<br />";
    }else{
      // encrypt the password
      // check if password has one uppercase letter
      if(preg_match("/[A-Z]/", $password)){
        // check if password has one lowercase letter
        if(preg_match("/[a-z]/", $password)){
          // check if password has one number
          if(preg_match("/[0-9]/", $password)){
            // check if password has one special character
            $password = md5($password);
            $passwordFlag = false;
            $passwordError = "";
          }else{
            $passwordFlag = true;
            $passwordError = "Password must contain at least one number. You entered '" . $password . "'.<br />";
          }
        }else{
          $passwordFlag = true;
          $passwordError = "Password must contain at least one lowercase letter. You entered '" . $password . "'.<br />";
        }
      }else{
        $passwordFlag = true;
        $passwordError = "Password must contain at least one uppercase letter. You entered '" . $password . "'.<br />";
      }
    }

    if(empty($age)){
      $ageError = "Please select your age group.<br />";
    }else{
      $age = mysqli_real_escape_string($connection, $age);
      $ageError = "";
    }

    // check if terms is checked
    if(empty($terms)){
      $termsError = "Please agree to the terms and conditions.<br />";
    }else{
      $terms = mysqli_real_escape_string($connection, $terms);
      $termsError = "";
    }

    if(!empty($username) && !empty($email) && !empty($phone) && !empty($password) && !empty($age) && !empty($terms) && !$passwordFlag && !$usernameFlag && !$emailFlag){
      $result = mysqli_query($connection, $query);
      if($result){
        // go to login page
        header("Location: login.php");
      } else{
        echo "Error: " . $query . "<br />" . mysqli_error($connection);
      }
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
        <h2 class="title-text">Signup For Steam</h2>
        <div class="login-elements">
          <!-- Form -->
          <form class="myForm" action="" method="POST">

            <div class="field">
              <label for="fullname">Full Name:<span>*</span></label>
              <input type="text" name="fullname" class="input" placeholder="Full Name" id="fullname"
                value="<?php echo isset($_POST['fullname']) ? $_POST['fullname'] : ''; ?>" />
              <span class="error">
                <?php
                  if(isset($fullNameError)){
                    echo $fullNameError;
                  }
                ?>
              </span>
            </div>
            <div class="field">
              <label for="username">Username:<span>*</span></label>
              <input type="text" name="username" class="input" placeholder="Username" id="username" value="<?php if(isset($_POST['username'])){
                echo $_POST['username'];
              } ?>" />
              <span class="error">
                <?php
                  if(isset($usernameError)){
                    echo $usernameError;
                  }
                ?>
              </span>
            </div>
            <div class="field">
              <label for="email">Email:<span>*</span></label>
              <input type="email" name="email" class="input" placeholder="Email" id="email" value="<?php if(isset($_POST['email'])){
                echo $_POST['email'];
              } ?>" />
              <span class="error">
                <?php 
                  if(isset($emailError)){
                    echo $emailError;
                  }
                ?>
              </span>
            </div>
            <div class="field">
              <label for="phone">Phone:<span>*</span></label>
              <input type="text" name="phone" class="input" placeholder="Phone" id="phone" value="<?php if(isset($_POST['phone'])){
                echo $_POST['phone'];
              } ?>" />
              <span class="error">
                <?php
                  if(isset($phoneError)){
                    echo $phoneError;
                  }
                ?>
              </span>
            </div>
            <div class="field">
              <label for="password">Password:<span>*</span></label>
              <input type="password" name="password" class="text-input phone-input" placeholder="Password" id="password"
                value="<?php if(isset($_POST['password'])){
                echo $_POST['password'];
              } ?>" />
              <span class="error">
                <?php
                  if(isset($passwordError)){
                    echo $passwordError;
                  }
                ?>
              </span>
            </div>
            <div class="field">
              <label for="age">Age Group:<span>*</span></label>
              <!-- create a dropdown for age group -->
              <select name="age" id="age">
                <option value="" <?php if(!isset($_POST['age'])){
                  echo "selected";
                } ?>>Choose your age group</option>
                <option value="Below 18" <?php if(isset($_POST['age'])){if($_POST['age'] === "Below 18"){
                  echo "selected";
                }} ?>>Below 18</option>
                <option value="18-24" <?php if(isset($_POST['age'])){if($_POST['age'] === "18-24"){
                  echo "selected";
                }} ?>>18-24
                </option>
                <option value="24-30" <?php if(isset($_POST['age'])){if($_POST['age'] === "24-30"){
                  echo "selected";
                }} ?>>24-30
                </option>
                <option value="Above 30" <?php if(isset($_POST['age'])){if($_POST['age'] === "Above 30"){
                  echo "selected";
                }} ?>>Above
                  30</option>
              </select>
              <span class="error">
                <?php
                  if(isset($ageError)){
                    echo $ageError;
                  }
                ?>
              </span>
            </div>
            <div class="field terms-checkbox">
              <!-- checkbox for terms and conditions -->
              <input type="checkbox" name="terms" id="terms" checked="<?php if(isset($_POST['terms'])){
                  echo "checked";
                } ?>" />
              <label for="terms">I agree to the Terms and Conditions<span>*</span></label>
              <span class="error">
                <?php 
                  if(isset($termsError)){
                    echo $termsError;
                  }
                ?>
              </span>
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
  ob_end_flush();
  ?>
</body>

</html>