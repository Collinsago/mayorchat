<?php
  $hostname = "eu-cdbr-west-02.cleardb.net";
  $username = "b8bfd6c0820f13";
  $password = "76f6ae48";
  $dbname = "heroku_3ad9a7572288722";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
?>
