<?php
session_start();
$GLOBALS['detailsInvalid'] = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  require '_dbconnect.php'; 
  $name = $_POST["recipientname"];
  $email = $_POST["recipientemail"];
  $phone = $_POST["recipientphone"];
  $companyName = $_POST["companyname"];
  $pincode = $_POST["pincode"];
  $updates = $_POST["flexCheckDefault"];
  $flag = false;
  if($updates){
    $flag = true;
  }
  $sql = "INSERT INTO `yourrequirements`(`email`, `phone`, `name`, `companyName`, `pincode`, `recieveUpdates`) VALUES ('$email','$phone','$name','$companyName','$pincode','$flag');";
  $result = mysqli_query($conn, $sql);
  if(!$result){
    $GLOBALS['detailsInvalid'] = true;
    header("Location: ../index.php");
  } else {
    header("Location: ../index.php");
  }
  }
?>