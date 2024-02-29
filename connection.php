<?php 
  $servername = "(insert server)";
  $username = "(insert username)";
  $password = "(insert password)";
  $dbname = "(insert name of database)";

  //creating the connection
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  //checking the connection
  if (!$conn){
    die("Connection failed: " . mysqli_connect_error());
  }else{
    echo "Connected!";
  }

?>
