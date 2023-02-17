<?php
session_start();

if(!isset($_SESSION['loggedin'])||$_SESSION['loggedin']!=true){
  header("Location: ./index.php");
  exit;
} else {
  $server="localhost";
  $username="u539513313_contact";
  $password="Admin@123";
  $database="u539513313_contact";

  $conn = new mysqli($server,$username,$password,$database);
  if(!$conn){
    die("Error".mysqli_connect_error());
  }
  $query = "SELECT * FROM `contactdetails`;";
  $query1 = "SELECT * FROM `yourrequirements`;";

  $result = mysqli_query($conn, $query);
  $result1 = mysqli_query($conn, $query1);

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome - <?php echo $_SESSION['email'] ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <style>

  </style>
</head>
<body>
  <?php require 'partials/_nav.php'?>
  <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Welcome - <?php echo $_SESSION['email'] ?></h4>

</div>

<?php

    if (mysqli_num_rows($result) > 0) {
      echo"<div class='m-4'>";
      echo"<h2>Contact Details</h2>";
        echo" <table class='table table-bordered'>";
        echo"<thead>";
        echo" <tr >";
        echo"  <th >Name</th>";
        echo" <th >Email</th>";
        echo" <th >Contact</th>";
        echo"  <th>Whatsapp</th>";
        echo"  <th>Skype</th>";
        echo"  <th>Address</th>";
        echo"  <th>Budget</th>";
        echo"  <th>Message</th>";
        
        echo"</tr>";

        
        echo" </thead>";
       
        while($row = mysqli_fetch_assoc($result)) {
         
    echo" <tbody>";
    
    echo"   <tr>";

    echo '<td>'. $row["name"].'</td>';
    echo '<td>'. $row["email"].'</td>';
    echo '<td>'. $row["contactNumber"].'</td>';
    echo '<td>'. $row["whatsappNumber"].'</td>';
    echo '<td>'. $row["skype"].'</td>';
    echo '<td>'. $row["address"].'</td>';
    echo '<td>'. $row["projectBudget"].'</td>';
    echo '<td>'. $row["message"].'</td>';
    echo"  </tr>";
    echo"  </tbody>";
        }
      
     
    echo"  </table>";
    echo"  </div>";
       
               
    } else {
        echo "0 results";
    } 
  ?>


<?php

if (mysqli_num_rows($result) > 0) {
  echo"<div class='m-4'>";
   echo"<h2>Requirement Details</h2>";
    echo" <table class='table table-bordered'>";
    echo"<thead>";
    echo" <tr >";
    echo"  <th >Name</th>";
    echo" <th >Email</th>";
    echo" <th >Contact</th>";
    echo"  <th>Company name</th>";
    echo"  <th>Pincode</th>";
   
    
    echo"</tr>";

    
    echo" </thead>";
   
    while($row = mysqli_fetch_assoc($result1)) {
     
echo" <tbody>";

echo"   <tr>";

echo '<td>'. $row["name"].'</td>';
echo '<td>'. $row["email"].'</td>';
echo '<td>'. $row["phone"].'</td>';
echo '<td>'. $row["companyName"].'</td>';
echo '<td>'. $row["pincode"].'</td>';

echo"  </tr>";
echo"  </tbody>";
    }
  
 
echo"  </table>";
echo"  </div>";
   
           
} else {
    echo "0 results";
} 
 
  ?>
</body>
</html>