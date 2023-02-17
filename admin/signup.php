<?php
  $showAlert = false;
  $showPError = false;
  $showEmailError = false;
  $flag = false;
if($_SERVER["REQUEST_METHOD"]=="POST"){
  require 'partials/_dbconnect.php'; 
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  $sql1 = "SELECT `email` FROM `admintable` WHERE `email`='$email'";
  $exists = mysqli_query($conn, $sql1);
  if($exists){
    $flag = true;
}
  if($flag==true){
    $showEmailError = true;
  } else{
    if($password==$cpassword){
      $sql = "INSERT INTO `admintable`(`email`, `password`) VALUES ('$email','$password')";
      $result = mysqli_query($conn, $sql);
      if($result){
        $showAlert = true;
      }
    } else {
        $showPError = true;
    }
  }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Sign Up</title>
</head>
<body>
  <?php require 'partials/_nav.php'?>
  <?php 
  if($showAlert == true){
  echo 'success';
  }

  if($showPError == true){
  echo 'Passwords do not match';
  }
  if($showEmailError == true){
  echo 'Email is already present';
  }
  ?>
  <div class="container">
    <h1 class="text-center">
      Signup to our website
</h1>
<form action="./signup.php" method="post">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <div class="mb-3">
    <label for="cpassword" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword">
  </div>
  
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
  </div>
</body>
</html>