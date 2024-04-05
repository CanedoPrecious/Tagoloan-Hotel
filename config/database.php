<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db_name="";

  $conn= mysqli_connect($servername, $username, $password, $db_name);

  if(!$conn){
    die("Failed to Connect". mysqli_connect_error());
  }

  $conn->close();

?>