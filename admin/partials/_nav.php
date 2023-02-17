<?php

$loggedin = false;
if(isset($_SESSION['loggedin'])){
  $loggedin = true; 
}
  echo '<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MyLogin</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       ';
        if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="./index.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./signup.php">Sign Up</a>
        </li>';
        }
        if($loggedin){
        echo '
        
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="./welcome.php">Home</a>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="./logout.php">Logout</a>
        </li>';
        }
      echo '</ul>
     
    </div>
  </div>
</nav>';
?>