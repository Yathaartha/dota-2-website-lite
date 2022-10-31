<?php
  session_start();
  // logout
  // destroy session
  session_destroy();
  // redirect to login page
  header("Location: login.php");
?>