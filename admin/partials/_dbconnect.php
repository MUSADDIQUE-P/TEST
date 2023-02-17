<?php
$server="localhost";
$username="u539513313_softmore_admin";
$password="Admin@123";
$database="u539513313_admin";

$conn = new mysqli($server,$username,$password,$database);
if(!$conn){
  die("Error".mysqli_connect_error());
}

?>