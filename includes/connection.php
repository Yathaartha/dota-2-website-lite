<?php
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $database = "wat2021db";

  $connection = mysqli_connect($hostname, $username, $password, $database);

  If(!$connection) {
    // echo "Connection failed!";
    die("Connection failed: " . mysqli_connect_error());
    exit;
  }else{
    // echo "Connection successful!<br />";
  }
?>