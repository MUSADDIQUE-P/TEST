<?php
session_start();
$GLOBALS['detailsNotSent'] = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  require '_dbconnect.php'; 
  $name = $_POST["name"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $whatsapp = $_POST["whatsapp"];
  $skype = $_POST["skype"];
  $address = $_POST["address"];
  $budget = $_POST["budget"];
  $message = $_POST["message"];

  $sql = "INSERT INTO `contactdetails`(`name`, `email`, `contactNumber`, `whatsappNumber`, `skype`, `address`, `projectBudget`, `message`) VALUES ('$name','$email','$phone','$whatsapp','$skype','$address','$budget','$message');";
  $result = mysqli_query($conn, $sql);
  if(!$result){
    $GLOBALS['detailsNotSent'] = true;
    header("Location: ../contact.php");
  } else {
    header("Location: ../contact.php");
  }
  }
?>