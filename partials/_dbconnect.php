<?php
$server="localhost";
$username="u539513313_contact";
$password="Admin@123";
$database="u539513313_contact";

$conn = new mysqli($server,$username,$password,$database);
if(!$conn){
  die("Error".mysqli_connect_error());
}

?>