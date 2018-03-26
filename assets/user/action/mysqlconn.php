<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "staff_system";
  
  $connect = mysqli_connect($servername,$username,$password,$db);

  // if(!$connect){
  //    die("Connection Failed: ".mysqli_connect_error());
  // }	  
?>